<?php
include ('../connection.php');
$id = $_GET['id'];

if (!empty($id)) {
  $sqlhapus = "DELETE FROM kategori WHERE id_kategori='$id'";
  if ($mysqli->query($sqlhapus)) { ?>
    <script>
    alert('File Deleted!');
    window.location.href="../index.php?hal=category";
    </script>
<?php }}
else { ?>
  <script>
  alert('Data NOT Deleted!');
  window.location.href="index.php?hal=category";
  </script>
<?php };
?>
