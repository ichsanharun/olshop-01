<?php
include ('../connection.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$email = $_GET['email'];
$no_telp = $_GET['no_telp'];


if (!empty($id) and (!empty($nama)) and (!empty($alamat)) and (!empty($email)) and (!empty($no_telp)) ) {
  $sqlupdate = "UPDATE admin SET nama_admin = '$nama' , alamat_admin = '$alamat' , no_telp_admin = '$no_telp' , email_admin = '$email' WHERE id_admin = '$id'";
  mysqli_query($mysqli,$sqlupdate);
    ?>
    <script>
    alert('Success!');
    window.location.href="index.php?hal=admin";
    </script>
  <?php
}
else {
  ?>
  <script>
  alert('Data is not Valid!');
  window.location.href="index.php?hal=book";
  </script>
<?php
}
?>
