<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * @author Yunas Handra
 * @copyright Copyright (c) 2018, Yunas Handra
 *
 * This is model class for table "Customer"
 */

class Productcosting_model extends BF_Model
{

    /**
     * @var string  User Table Name
     */
    protected $table_name = 'product_costing';
    protected $key        = 'id_barang';

    /**
     * @var string Field name to use for the created time column in the DB table
     * if $set_created is enabled.
     */
    protected $created_field = 'create_on';

    /**
     * @var string Field name to use for the modified time column in the DB
     * table if $set_modified is enabled.
     */
    protected $modified_field = 'modified_on';

    /**
     * @var bool Set the created time automatically on a new record (if true)
     */
    protected $set_created = true;

    /**
     * @var bool Set the modified time automatically on editing a record (if true)
     */
    protected $set_modified = true;
    /**
     * @var string The type of date/time field used for $created_field and $modified_field.
     * Valid values are 'int', 'datetime', 'date'.
     */
    /**
     * @var bool Enable/Disable soft deletes.
     * If false, the delete() method will perform a delete of that row.
     * If true, the value in $deleted_field will be set to 1.
     */
    protected $soft_deletes = true;

    protected $date_format = 'datetime';

    /**
     * @var bool If true, will log user id in $created_by_field, $modified_by_field,
     * and $deleted_by_field.
     */
    protected $log_user = true;

    /**
     * Function construct used to load some library, do some actions, etc.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function get_barang(){
         $query="SELECT
                barang_master.id_barang,
                barang_master.nm_barang,
                barang_master.brand,
                barang_master.model
                FROM
                barang_master ";
        return $this->db->query($query);
    }

    public function get_cabang(){
         $query="SELECT
                cabang.id,
                cabang.kdcab,
                cabang.namacabang,
                cabang.biaya_logistik_lokal
                FROM
                cabang";
        return $this->db->query($query);
    }

    public function get_cabang_by($kdcab){
         $query="SELECT
                cabang.id,
                cabang.kdcab,
                cabang.namacabang,
                cabang.biaya_logistik_lokal
                FROM
                cabang WHERE kdcab='$kdcab'";
        return $this->db->query($query);
    }

    public function get_group_profit(){
         $query="SELECT
                barang_group.id_group,
                barang_group.nm_group,
                barang_group.budget_margin
                FROM
                barang_group";
        return $this->db->query($query);
    }

    public function cek_data($kunci,$tabel) {
        $this->db->where($kunci);
        $query=$this->db->get($tabel);
        return $query->row();
    }

}
