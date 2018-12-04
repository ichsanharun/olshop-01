<!--?php

include ('../koneksi/koneksi.php');

$id = $_GET['id'];
$sqledit = "SELECT * FROM buku WHERE id_buku = '$id'";
$queryedit = $mysqli->query($sqledit);
//"UPDATE dokter set nama_dokter = ";
?-->

<div id="page-wrapper">

    <div class="container-fluid">


      <div class="row">
          <div class="col-lg-12">

              <form class="form-horizontal" action="pages/admin_add_act.php" method="post" enctype="multipart/form-data">


                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Admin ID</label>
                    <div class="col-lg-3"><input name="id" class="form-control col-lg-6" value=""></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Admin Name</label>
                    <div class="col-lg-3"><input name="nama" class="form-control col-lg-10" value=""></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Address</label>
                    <div class="col-lg-3"><input name="alamat" class="form-control col-lg-10" value=""></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Mobile</label>
                    <div class="col-lg-3"><input name="no_telp" class="form-control col-lg-10" value=""></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">E-Mail</label>
                    <div class="col-lg-3"><input name="email" class="form-control col-lg-10" value=""></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Password</label>
                    <div class="col-lg-3"><input name="password" type="password" class="form-control col-lg-10" value=""></div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2" style="text-align:left">Re-Type Password</label>
                    <div class="col-lg-3"><input name="password-1" type="password" class="form-control col-lg-10" value=""></div>
                </div>


                  <button type="submit" class="btn btn-default">Save</button>
                  <button type="reset" class="btn btn-default">Cancel</button>

              </form>

          </div>
      </div>
