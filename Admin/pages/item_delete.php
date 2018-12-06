<?php
include ('../connection.php');
$id = $_GET['id'];

if (!empty($id)) {
  $sqlhapus = "DELETE FROM item WHERE id_item='$id'";
  if ($mysqli->query($sqlhapus)) { ?>
    <script>
    alert('File Deleted!');
    window.location.href="index.php?hal=item";
    </script>
<?php }}
else { ?>
  <script>
  alert('Data NOT Deleted!');
  window.location.href="index.php?hal=item";
  </script>
<?php };
?>
