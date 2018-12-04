<?php

include ('connection.php');

$id = $_POST['id'];
$password = $_POST['password'];

    $pelanggan = mysqli_query($mysqli, "SELECT * FROM pelanggan WHERE email_pelanggan = '$id' AND password_pelanggan='$password'");

    $row=mysqli_fetch_array($pelanggan);

    if ($row['email_pelanggan'] == $id AND $row['password_pelanggan'] == $password)
        {
          session_start();
          $_SESSION['hak'] = "Member";
          $_SESSION['id'] = $row['id_pelanggan'];
          $_SESSION['nama']= $row['nama_pelanggan'];
          header('location:index.php');
        }

    elseif ($row['email_pelanggan'] != $id AND $row['password_pelanggan'] != $password)
        {
          $admin = mysqli_query($mysqli, "SELECT * FROM admin WHERE id_admin = '$id' AND password_admin='$password'");
          $rowadmin=mysqli_fetch_array($admin);

          if ($rowadmin['id_admin'] == $id AND $rowadmin['password_admin'] == $password)
              {
                session_start();
                $_SESSION['hak'] = "ADMIN";
                $_SESSION['id'] = $rowadmin['id_admin'];
                $_SESSION['nama']= $rowadmin['nama_admin'];
                header('location:admin/index.php');
              }
          else
            {
                ?>
                <script>
                alert('Anda harus mengisi data dengan benar !');
                window.location.href="index.php";
                </script>
                <?php
            }
        }

    else
      {
        ?>
        <script>
        alert('Anda harus mengisi data dengan benar !');
        window.location.href="index.php";
        </script><?php
      }
?>
