<?php
include ('../../connection.php');

if (!empty($_FILES['file'])) {
  $view = $_FILES['file']['name'];
  $x = explode('.', $view);
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];

  if (!empty($_POST['id_item'])) {

    if ($ukuran > 4096000)
    {
      ?>
      <script>
      alert('UKURAN FILE TIDAK BOLEH MELEBIHI 4MB!');
      window.location.href="index.php?hal=item_edit";
      </script>
      <?php
    }

    else
    {
      move_uploaded_file($file_tmp, '../../images/buku/'.$view);
      $sqlupdate = "UPDATE item SET
      nama_item   = '$_POST[nama_item]',
      harga_item  = '$_POST[harga_item]',
      stok        = '$_POST[stok]',
      gambar      = '$view',
      id_kategori = '$_POST[id_kategori]',
      jenis_item  = '$_POST[jenis_item]',
      model_item  = '$_POST[model_item]',
      tipe_item   = '$_POST[tipe_item]'
      WHERE id_item = '$_POST[id_item]'";
      //echo $sqlupdate;
      while ($mysqli->query($sqlupdate)){
        ?>
        <script>
        alert('Success!');
        window.location.href="../index.php?hal=item";
        </script>
      <?php
      }
    }

  }
  else {
    ?>
    <script>
    alert('Data is not Valid!');
    window.location.href="../index.php?hal=item";
    </script>
  <?php
  }
}
else{
  $sqlupdate = "UPDATE item SET
  nama_item   = '$_POST[nama_item]',
  harga_item  = '$_POST[harga_item]',
  stok        = '$_POST[stok]',
  id_kategori = '$_POST[id_kategori]',
  jenis_item  = '$_POST[jenis_item]',
  model_item  = '$_POST[model_item]',
  tipe_item   = '$_POST[tipe_item]'
  WHERE id_item = '$_POST[id_item]'";

  while ($mysqli->query($sqlupdate)){
    ?>
    <script>
    alert('Success!');
    window.location.href="../index.php?hal=item";
    </script>
  <?php
  }
}

?>
