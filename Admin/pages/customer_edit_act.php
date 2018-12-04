<?php
include ('../connection.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$email = $_GET['email'];
$no_telp = $_GET['no_telp'];


if (!empty($id) and (!empty($nama)) and (!empty($alamat)) and (!empty($email)) and (!empty($no_telp)) ) {
  $sqlupdate = "UPDATE pelanggan SET nama_pelanggan = '$nama' , alamat_pelanggan = '$alamat' , no_telp_pelanggan = '$no_telp' , email_pelanggan = '$email' WHERE id_pelanggan = '$id'";
  mysqli_query($mysqli,$sqlupdate);
    ?>
    <script>
    alert('Success!');
    window.location.href="index.php?hal=customer";
    </script>
  <?php
}
else {
  ?>
  <script>
  alert('Data is not Valid!');
  window.location.href="index.php?hal=customer";
  </script>
<?php
}
?>
