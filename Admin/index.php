<!DOCTYPE html>
<html lang="en">
  <?php $namespace="grid";
  session_start();
   ?>

<head>
<?php include 'header.php'; ?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->


        <?php

              include 'navbar.php';
?>
<!--//- - - - - - - - - - - - - - - - PAGES -------------------------------------------->
<div class="konten-box">
<?php
//sama seperti include fungsinya dan untuk alamatnya atau urlnya index.php?p= atau mengatur untuk mengatur halaman
    if(!empty($_GET['hal'])){
          $hal=$_GET['hal'];
   				include('pages/'.$hal.'.php');
   			}

    else {
      if (empty($_SESSION['hak'])) {
        //include('login.php');
        ?>
        <script>
        alert('You Must Login First!');
        window.location.href="../index.php";
        </script><?php
      }
   		else	{
        include('pages/home.php');
      }
   		}

?>
</div>
<!--//- - - - - - - - - - - - - - - - END OF PAGES -------------------------------------------->
    </div>
    <!-- /#wrapper -->



</body>

</html>
