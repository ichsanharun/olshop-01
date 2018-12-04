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
    $sqlupdate = "INSERT INTO buku (id_buku, judul_buku, harga_buku, stok, gambar, id_kategori) VALUES ('$id','$judul','$harga','$stok','$view','$kategori')";

      while ($queryupdate =mysqli_query($mysqli, $sqlupdate) AND $ukuran <= 4096000)
      {
        ?>
        <script>
        alert('FILE UPLOADED!');
        window.location.href="../index.php?hal=book";
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
  window.location.href="../index.php?hal=book";
  </script>
  <?php
}
?>
