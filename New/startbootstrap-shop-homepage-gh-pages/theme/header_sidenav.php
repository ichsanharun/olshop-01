<div class="col-lg-3">

  <h1 class="my-4">ER Computer</h1>
  <div class="list-group">
    <?php
    $kat = $db->select('kategori');
    foreach ($kat as $key => $value) {
      echo '<a href="?p=kategori&id='.$value["id_kategori"].'" class="list-group-item">'.$value["nama_kategori"].'</a>';
    }?>

  </div>

</div>
