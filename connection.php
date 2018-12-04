<?php
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "penjualan");

$mysqli = new mysqli(HOST,USER,PASSWORD,DATABASE);

if($mysqli->connect_error){
  trigger_error('FAIL to connect to database: '.$mysqli->connect_error, E_USER_ERROR);
}
 ?>
