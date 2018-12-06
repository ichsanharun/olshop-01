<?php
include ('../../connection.php');
$id = "IT".$_POST["id_kategori"].$_POST["jenis_item"].$_POST["model_item"].$_POST["tipe_item"];
$sqldetail = "SELECT MAX(id_item) FROM item WHERE id_item LIKE '%$id%'";
$querydetail = $mysqli->query($sqldetail);
(int) $res = $querydetail->num_rows;
if ($res > 9) {
  $c = $res+1;
}else {
  $c = "0".$res+1;
}
$id = $id.$c;

$view = $_FILES['file']['name'];
$x = explode('.', $view);
$ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
echo $res;



if (!empty($id)) {

  if ($ukuran > 4096000)
  {
    ?>
    <script>
    alert('UKURAN FILE TIDAK BOLEH MELEBIHI 4MB!');
    window.location.href="index.php?hal=item_add";
    </script>
    <?php
  }

  else
  {
    move_uploaded_file($file_tmp, '../../images/buku/'.$view);
    $sqlupdate = "INSERT INTO item (id_item, nama_item, harga_item, stok, gambar, id_kategori, jenis_item, model_item, tipe_item) VALUES (
      '$id',
      '$_POST[nama_item]',
      '$_POST[harga_item]',
      '$_POST[stok]',
      '$view',
      '$_POST[id_kategori]',
      '$_POST[jenis_item]',
      '$_POST[model_item]',
      '$_POST[tipe_item]'
    )";

      while ($queryupdate =mysqli_query($mysqli, $sqlupdate) AND $ukuran <= 4096000)
      {
        ?>
        <script>
        alert('FILE UPLOADED!');
        window.location.href="../index.php?hal=item";
        </script>
        <?php
      }
  }
}

else
{
  ?>
  <script>
  alert('Data Is NOT Valid!');
  window.location.href="../index.php?hal=item";
  </script>
  <?php
}
?>
