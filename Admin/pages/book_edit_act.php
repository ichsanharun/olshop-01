<?php
include ('../../connection.php');
$id = $_POST['id'];
$judul = $_POST['judul'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$kategori = $_POST['kategori'];

$view = $_FILES['file']['name'];
$x = explode('.', $view);
$ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];

if (!empty($id) and (!empty($judul)) and (!empty($harga)) and (!empty($stok)) and (!empty($view)) and (!empty($kategori)) ) {

  if ($ukuran > 4096000)
  {
    ?>
    <script>
    alert('UKURAN FILE TIDAK BOLEH MELEBIHI 4MB!');
    window.location.href="index.php?hal=book_add";
    </script>
    <?php
  }

  else
  {
    move_uploaded_file($file_tmp, '../../images/buku/'.$view);
    $sqlupdate = "UPDATE buku SET judul_buku = '$judul' , harga_buku = '$harga' , stok = '$stok' , gambar = '$view' , id_kategori = '$kategori' WHERE id_buku = '$id'";
    while ($mysqli->query($sqlupdate)){
      ?>
      <script>
      alert('Success!');
      window.location.href="../index.php?hal=book";
      </script>
    <?php
    }
  }

}
else {
  ?>
  <script>
  alert('Data is not Valid!');
  window.location.href="../index.php?hal=book";
  </script>
<?php
}
?>
