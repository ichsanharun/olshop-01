<?php
include ('../connection.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
if (!empty($id) and (!empty($nama)) ) {
  $sqlupdate = "INSERT INTO kategori (id_kategori,nama_kategori) VALUES ('$id','$nama')";
  while ($mysqli->query($sqlupdate)){
    ?>
    <script>
    alert('Success!');
    window.location.href="index.php?hal=category";
    </script>
  <?php
}}
else {
  ?>
  <script>
  alert('Data is not Valid!');
  window.location.href="index.php?hal=category";
  </script>
<?php
}
?>
