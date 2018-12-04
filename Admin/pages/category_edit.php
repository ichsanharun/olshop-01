<?php

include ('../connection.php');

$id = $_GET['id'];
$sqledit = "SELECT * FROM kategori WHERE id_kategori = '$id'";
$queryedit = $mysqli->query($sqledit);
//"UPDATE dokter set nama_dokter = ";
?>

<div id="page-wrapper">

    <div class="container-fluid">


      <div class="row">
          <div class="col-lg-12">

              <form class="form-horizontal" action="index.php" method="get">
                <input type="hidden" name="hal" value="category_edit_act">

                <?php while ($hasiledit = $queryedit->fetch_array()) {
                ?>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Category ID</label>
                      <div class="col-lg-6"><input name="id" class="form-control col-lg-6" value="<?php echo "$hasiledit[id_kategori]"; ?>"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Category Name</label>
                      <div class="col-lg-10"><input name="nama" class="form-control col-lg-10" value="<?php echo "$hasiledit[nama_kategori]"; ?>"></div>
                  </div>
                  <?php
                  } ?>

                  <button type="submit" class="btn btn-default">Save</button>
                  <button type="reset" class="btn btn-default">Cancel</button>

              </form>

          </div>
      </div>
