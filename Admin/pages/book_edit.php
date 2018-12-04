<?php

include ('../connection.php');

$id = $_GET['id'];
$sqledit = "SELECT * FROM buku WHERE id_buku = '$id'";
$queryedit = $mysqli->query($sqledit);

?>

<div id="page-wrapper">

    <div class="container-fluid">


      <div class="row">
          <div class="col-lg-12">

              <form class="form-horizontal" action="pages/book_edit_act.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="hal" value="book_edit_act">

                <?php while ($hasiledit = $queryedit->fetch_array()) {
                ?>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Book ID</label>
                      <div class="col-lg-6"><input name="id" class="form-control col-lg-6" value="<?php echo "$hasiledit[id_buku]"; ?>"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Book Title</label>
                      <div class="col-lg-10"><input name="judul" class="form-control col-lg-10" value="<?php echo "$hasiledit[judul_buku]"; ?>"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Price</label>
                      <div class="col-lg-10"><input name="harga" class="form-control col-lg-10" value="<?php echo "$hasiledit[harga_buku]"; ?>"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Stok</label>
                      <div class="col-lg-10"><input name="stok" class="form-control col-lg-10" value="<?php echo "$hasiledit[stok]"; ?>"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">View</label>
                      <div class="col-lg-10"><input name="file" type="file"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Category</label>
                      <div class="col-lg-10"><input name="kategori" class="form-control col-lg-10" value="<?php echo "$hasiledit[id_kategori]"; ?>"></div>
                  </div>

                  <?php
                  } ?>

                  <button type="submit" class="btn btn-default">Save</button>
                  <button type="reset" class="btn btn-default">Cancel</button>

              </form>

          </div>
      </div>
