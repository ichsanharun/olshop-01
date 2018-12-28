<!DOCTYPE html>
<html lang="en">

  <?php
    session_start();
    include 'config/connection.php';
    include 'config/controller.php';
    include 'config/helper.php';
    include 'theme/header.php';

  ?>

  <body>

    <!-- =====Navigation===== -->
    <?php include 'theme/header_topnav.php'; ?>
    <!-- ===END Navigation=== -->

    <!-- Page Content -->
    <div class="container container-content mt-1">

      <div class="row">
        <!-- =====Side Navigation===== -->
          <?php include 'theme/header_sidenav.php'; ?>
        <!-- ===END Side Navigation=== -->
        <!-- /.col-lg-3 -->
        <?php

            if(!empty($_GET['p'])){
                  $p=$_GET['p'];
                  include('pages/'.$p.'.php');
            }
            else {
              if (empty($_SESSION['hak'])) {
                include('pages/home.php');
              }
              else	{
                include('pages/home.php');
              }
            }

        ?>

        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include 'theme/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
