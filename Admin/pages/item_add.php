<?php include ('../connection.php');

$id = $_SESSION['id'];
$sqldetail = "SELECT * FROM kategori";
$querydetail = $mysqli->query($sqldetail);
$data = $querydetail->fetch_assoc();
?>
<div id="page-wrapper">

    <div class="container-fluid">


      <div class="row">
          <div class="col-lg-12">

              <form class="form-horizontal" action="pages/item_add_act.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="hal" value="book_add_act">

                  <!--div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Item ID</label>
                      <div class="col-lg-6"><input name="id_item" class="form-control col-lg-6" value=""></div>
                  </div-->

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Item Name</label>
                      <div class="col-lg-6"><input name="nama_item" class="form-control col-lg-6" value=""></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Price</label>
                      <div class="col-lg-6"><input name="harga_item" class="form-control col-lg-6" value=""></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Stock</label>
                      <div class="col-lg-6"><input name="stok" class="form-control col-lg-6" value=""></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">View</label>
                      <div class="col-lg-6"><input name="file" type="file"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Category</label>
                      <div class="col-lg-3">
                        <select name="id_kategori" class="form-control col-lg-6">
                          <?php foreach ($querydetail as $key => $value) {
                            echo '<option value="'.$value["id_kategori"].'">'.$value["nama_kategori"].'</option>';
                          } ?>

                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Jenis</label>
                      <div class="col-lg-6"><input name="jenis_item" class="form-control col-lg-6" value=""></div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Model</label>
                      <div class="col-lg-6"><input name="model_item" class="form-control col-lg-6" value=""></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Type</label>
                      <div class="col-lg-6"><input name="tipe_item" class="form-control col-lg-6" value=""></div>
                  </div>

                  <button type="submit" class="btn btn-default">Save</button>
                  <button type="reset" class="btn btn-default">Cancel</button>

              </form>

          </div>
      </div>
