<?php
include ('../../connection.php');

if ($_POST['password']==$_POST['password-1'] )
{

  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $no_telp = $_POST['no_telp'];
  $password = $_POST['password'];


  if (!empty($id) and (!empty($nama)) and (!empty($alamat)) and (!empty($email)) and (!empty($no_telp)) ) {

      $sqlupdate = "INSERT INTO admin (id_admin, nama_admin, alamat_admin, email_admin, no_telp_admin) VALUES ('$id','$nama','$alamat','$email','$no_telp')";

        while ($queryupdate = mysqli_query($mysqli, $sqlupdate))
        {
          ?>
          <script>
          alert('Success');
          window.location.href="../index.php?hal=admin";
          </script>
          <?php
        }
    }


  else
  {
    ?>
    <script>
    alert('Data is NOT Valid!');
    //window.location.href="index.php?hal=admin";
    </script>
    <?php
  }
}
else
{
  echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
}
?>
