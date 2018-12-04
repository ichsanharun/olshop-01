<?php
include ('../../connection.php');
$no_trans = $_POST['no_trans'];
$type = $_POST['cancel'];
if ($type == "cancel") {
  $sqlupdate = "UPDATE transaksi SET status_pembayaran = 'Payment Canceled' WHERE no_transaksi = '$no_trans'";
  $queryupdate = $mysqli->query($sqlupdate);

    if (!isset($_SESSION)) {
        session_start();
        unset($_SESSION['items']);
    }

}
else {


$sqlupdate = "UPDATE transaksi SET status_pembayaran = 'Confirmed By Admin' WHERE no_transaksi = '$no_trans'";
$queryupdate = $mysqli->query($sqlupdate);

  if (!isset($_SESSION)) {
      session_start();
      unset($_SESSION['items']);
  }
}
  ?>
  <script>
  alert('Transaction Success');
  window.location.href="../index.php?hal=transaksi";
  </script><?php


?>
