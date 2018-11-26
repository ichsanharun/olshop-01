<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * @author Yunas Handra
 * @copyright Copyright (c) 2016, Yunas Handra
 * 
 * This is model class for table "Barang_cp_model"
 */

class Barang_cp_model extends BF_Model
{

    /**
     * @var string  User Table Name
     */
    protected $table_name = 'barang_colly_produk';
    protected $key        = 'id_colly_produk';

    /**
     * @var string Field name to use for the created time column in the DB table
     * if $set_created is enabled.
     */
    protected $created_field = 'created_on';

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

    public function pilih_cp(){
        $query="SELECT
                barang_colly_produk.id_colly_produk,
                barang_colly_produk.colly_produk
                FROM
                barang_colly_produk where sts_aktif='aktif'";
        return $this->db->query($query);
    }

    public function get_nmcp($id_colly_produk){
        $query=$this->db->query("SELECT
                barang_colly_produk.colly_produk
                FROM
                barang_colly_produk where id_colly_produk='".$id_colly_produk."'");
        $row = $query->row_array();
        $colly_produk = $row['colly_produk']; 
        return $colly_produk;
    }    

    public function tampil_cp(){
        $query="SELECT
        id_colly_produk,
        colly_produk,
        keterangan
        FROM
        barang_colly_produk";
        return $this->db->query($query);  
    }

}
