<?php

include ('../connection.php');

$id = $_GET['id'];
$sqledit = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id'";
$queryedit = $mysqli->query($sqledit);
//"UPDATE dokter set nama_dokter = ";
?>

<div id="page-wrapper">

    <div class="container-fluid">


      <div class="row">
          <div class="col-lg-12">

              <form class="form-horizontal" action="index.php" method="get">
                <input type="hidden" name="hal" value="customer_edit_act">

                <?php while ($hasiledit = $queryedit->fetch_array()) {
                ?>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Customer ID</label>
                      <div class="col-lg-3"><input name="id" class="form-control col-lg-6" value="<?php echo "$hasiledit[id_pelanggan]"; ?>"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Name</label>
                      <div class="col-lg-3"><input name="nama" class="form-control col-lg-10" value="<?php echo "$hasiledit[nama_pelanggan]"; ?>"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Address</label>
                      <div class="col-lg-3"><input name="alamat" class="form-control col-lg-10" value="<?php echo "$hasiledit[alamat_pelanggan]"; ?>"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">Mobile</label>
                      <div class="col-lg-3"><input name="no_telp" class="form-control col-lg-10" value="<?php echo "$hasiledit[no_telp_pelanggan]"; ?>"></div>
                  </div>

                  <div class="form-group">
                      <label class="control-label col-lg-2" style="text-align:left">E-Mail</label>
                      <div class="col-lg-3"><input name="email" class="form-control col-lg-10" value="<?php echo "$hasiledit[email_pelanggan]"; ?>"></div>
                  </div>
                  <?php
                  } ?>

                  <button type="submit" class="btn btn-default">Save</button>
                  <button type="reset" class="btn btn-default">Cancel</button>

              </form>

          </div>
      </div>
