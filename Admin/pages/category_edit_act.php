<?php
include ('../connection.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
if (!empty($id) and (!empty($nama)) ) {
  $sqlupdate = "UPDATE kategori SET nama_kategori = '$nama' WHERE id_kategori = '$id'";
  mysqli_query($mysqli,$sqlupdate);
    ?>
    <script>
    alert('Success!');
    window.location.href="index.php?hal=category";
    </script>
  <?php
}
else {
  ?>
  <script>
  alert('Data is not Valid!');
  window.location.href="index.php?hal=category";
  </script>
<?php
}
?>
