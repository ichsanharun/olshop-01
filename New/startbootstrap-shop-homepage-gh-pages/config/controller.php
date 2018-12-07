<?php
/**
 *
 */
class Database
{

  private $host = 'localhost',
          $user = 'root',
          $pass = '',
          $data = 'penjualan';
  private $mysqli;
  function __construct()
  {

    $this->mysqli = new mysqli(
                      $this->host,
                      $this->user,
                      $this->pass,
                      $this->data
                    );

    if(mysqli_connect_error()){
      die('No Connection to DB');
    }
    //new Controller();
  }

  function select($tbl)
  {
    //new Controller();
    $select = "SELECT * FROM ".$tbl;
    $hasil = $this->mysqli->query($select);
    return $hasil;
  }
  function select_where($obj = '*', $tbl, $where = '')
  {
    if (!empty($where)) {
      $n = 0;
      $max = 0;
      foreach ($where as $key => $value) {
        $max++;
      }
      foreach ($where as $key => $value) {
        $n++;
        $wherex = $key." = '".$value."'";
        if ($n != $max) {
          $wherex .= " AND ";
        }
      }
    }
    $select = "SELECT ".$obj." FROM ".$tbl." WHERE ".$wherex;
    $hasil = $this->mysqli->query($select);
    return $hasil;
  }
  function select_condition($obj, $tbl, $where = '')
  {
    $select = "SELECT ".$obj." FROM ".$tbl." WHERE ".$where;
    $hasil = $mysqli->query($select);
    return $hasil;
  }
}
$db = new Database();
?>
