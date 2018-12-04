<?php

$query = "SELECT max(id_pelanggan) as maxKode FROM pelanggan";
$hasil = $mysqli->query($query);
$row  = mysqli_fetch_array($hasil);
$kode = $row['maxKode'];
$noUrut = (int) substr($kode, 4, 4);
$noUrut++;
$char = "PL";
$newID = $char . sprintf("%04s", $noUrut);


?>
<form class="form-horizontal" action="pages/aksi_sign-up.php" method="post">
  <div class="panel panel-green">
    <h1 class="panel-heading panel-title">Sign Up</h1>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">

                   <tr>
                       <td>ID</td>
                       <td>:</td>
                       <td><input class="form-control col-lg-6" value="<?php echo $newID; ?>" disabled></td>
                       <input name="id" class="form-control col-lg-6" value="<?php echo $newID; ?>" hidden="true">
                   </tr>

                   <tr>
                       <td>E-Mail</td>
                       <td>:</td>
                       <td><input name="email" type="email" class="form-control col-lg-6" value=""</td>
                   </tr>

                   <tr>
                       <td>Nama Lengkap</td>
                       <td>:</td>
                       <td><input name="nama" class="form-control col-lg-6" value=""></td>
                   </tr>

                   <tr>
                       <td>Password</td>
                       <td>:</td>
                       <td><input name="password" type="password" class="form-control col-lg-6" value=""></td>
                   </tr>

                   <tr>
                       <td>Re-Type Password</td>
                       <td>:</td>
                       <td><input name="password-1" type="password" class="form-control col-lg-6" value=""></td>
                   </tr>

                   <tr>
                       <td>Alamat</td>
                       <td>:</td>
                       <td><input name="alamat" class="form-control col-lg-6" value=""></td>
                   </tr>

                   <tr>
                       <td>No. Telp</td>
                       <td>:</td>
                       <td><input name="no_telp" class="form-control col-lg-6" value=""></td>
                   </tr>
          </table>
        </div>
      </div>
    </div>
  <button type="submit" class="btn btn-default">Save</button>
<button type="reset" class="btn btn-default">Cancel</button>
</form>
