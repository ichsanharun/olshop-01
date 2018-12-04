<?php
include ('../connection.php');
$id = $_GET['id'];

if (!empty($id)) {
  $sqlhapus = "DELETE FROM admin WHERE id_admin='$id'";
  if ($mysqli->query($sqlhapus)) { ?>
    <script>
    alert('File Deleted!');
    window.location.href="index.php?hal=admin";
    </script>
<?php }}
else { ?>
  <script>
  alert('Data NOT Deleted!');
  window.location.href="index.php?hal=admin";
  </script>
<?php };
?>
