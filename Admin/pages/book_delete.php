<?php
include ('../connection.php');
$id = $_GET['id'];

if (!empty($id)) {
  $sqlhapus = "DELETE FROM buku WHERE id_buku='$id'";
  if ($mysqli->query($sqlhapus)) { ?>
    <script>
    alert('File Deleted!');
    window.location.href="../index.php?hal=book";
    </script>
<?php }}
else { ?>
  <script>
  alert('Data NOT Deleted!');
  window.location.href="index.php?hal=book";
  </script>
<?php };
?>
