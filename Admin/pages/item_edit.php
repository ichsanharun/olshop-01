<?php

include ('../connection.php');

$id = $_GET['id'];
$sqledit = "SELECT * FROM item WHERE id_item = '$id'";
$queryedit = $mysqli->query($sqledit);
$sqldetail = "SELECT * FROM kategori";
$querydetail = $mysqli->query($sqldetail);
$data = $querydetail->fetch_assoc();
?>

<div id="page-wrapper">

    <div class="container-fluid">


      <div class="row">
          <div class="col-lg-12">

              <form class="form-horizontal" action="pages/item_edit_act.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="hal" value="item_edit_act">

                <?php while ($hasiledit = $queryedit->fetch_array()) {
                ?>
                <input name="id_item" class="form-control col-lg-6" value="<?php echo $hasiledit['id_item']?>">


                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Item Name</label>
                    <div class="col-lg-6"><input name="nama_item" class="form-control col-lg-6" value="<?php echo $hasiledit['nama_item']?>"></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Price</label>
                    <div class="col-lg-6"><input name="harga_item" class="form-control col-lg-6" value="<?php echo $hasiledit['harga_item']?>"></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Stock</label>
                    <div class="col-lg-6"><input name="stok" class="form-control col-lg-6" value="<?php echo $hasiledit['stok']?>"></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">View</label>
                    <div class="col-lg-6"><input name="file" type="file"><input type="hidden" name="gambar" value="<?php echo $hasiledit['gambar']?>"></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Category</label>
                    <div class="col-lg-3">
                      <select name="id_kategori" class="form-control col-lg-6">
                        <?php foreach ($querydetail as $key => $value) {
                          if ($value['id_kategori'] == $hasiledit['id_kategori']) {
                            $selected = 'selected';
                          }else {
                            $selected = '';
                          }
                          echo '<option value="'.$value["id_kategori"].'" '.$selected.'>'.$value["nama_kategori"].'</option>';
                        } ?>

                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Jenis</label>
                    <div class="col-lg-6"><input name="jenis_item" class="form-control col-lg-6" value="<?php echo $hasiledit['jenis_item']?>"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Model</label>
                    <div class="col-lg-6"><input name="model_item" class="form-control col-lg-6" value="<?php echo $hasiledit['model_item']?>"></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Type</label>
                    <div class="col-lg-6"><input name="tipe_item" class="form-control col-lg-6" value="<?php echo $hasiledit['tipe_item']?>"></div>
                </div>

                  <?php
                  } ?>

                  <button type="submit" class="btn btn-default">Save</button>
                  <button type="reset" class="btn btn-default">Cancel</button>

              </form>

          </div>
      </div>
