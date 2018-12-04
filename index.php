<!DOCTYPE html>
<html lang="en">
  <?php include 'connection.php';
        session_start();
  ?>

<!--=================================HEADER==================================-->
<head>
  <?php include 'header.php'; ?>
</head>
<!--=================================HEADER==================================-->

<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Insani <span>Book Store</span></a></h1>

        <?php include 'nav.php'; ?>



      <div id="keranjang-form">
        <fieldset>
          <div class="rowElem">
            <?php if (isset($_SESSION['items'])) {$value=0;
              $total = 0;
                foreach ($_SESSION['items'] as $key => $val){

                  $value += $val;}}
                  else {
                    $value=0;
                  }
                   ?>
            <input type="text" value="<?php echo $value; ?>" disabled>
            <a href="index.php?p=keranjang">Keranjang</a></div>
        </fieldset>
      </div>



      <form action="" id="search-form" method="post">
        <fieldset>
          <div class="rowElem">

              <input type="text" name="input_cari" placeholder="Cari Berdasar Judul Buku" class="css-input" style="width:250px;" />

              <button type="submit" name="cari" value="Cari" class="btn btn-primary"/>Search</button>

          </div>
        </fieldset>
      </form>



    </div>
  </header>



  <div class="container">
    <aside>
      <h3>Categories</h3>
        <ul class="categories">
          <?php
            $kat = "SELECT * FROM kategori";
            $querykat = $mysqli->query($kat);
            //$rskat = mysqli_fetch_array ($querykat);
            while ($rskat = $querykat->fetch_array())
            { ?>

              <li><span><a href="index.php?p=kategori&id=<?php echo $rskat['id_kategori']; ?>"><?php echo $rskat['nama_kategori']; ?></a></span></li>

          <?php } ?>

        </ul>

        <?php

          if (!isset($_SESSION['hak']))
          {
            ?><h3>Log In Here</h3>
            <form action="login-section.php" id="login-form" method="post">
              <fieldset>
                <div class="rowElem">
                  <!--h2>Login</h2-->
                  <input type="text" name="id" placeholder="Enter Your ID/Email Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
                  <input type="password" name="password" placeholder="Enter Your Password Here" onFocus="if(this.value=='Enter Your Email Here'){this.value=''}" onBlur="if(this.value==''){this.value='Enter Your Email Here'}" >
                  <div class="clear"><a href="index.php?p=sign-up" class="fleft" style="text-decoration: underline;">Sign Up For Free</a><button type="submit" class="btn btn-xs btn-default fright">Log In</button></div>
                </div>
              </fieldset>
            </form><?php
          }
          else
          {
            echo "$_SESSION[hak]";
          }

        ?>

      <!--h2>Fresh <span>News</span></h2>
      <ul class="news">
        <li><strong>June 30, 2010</strong>
          <h4><a href="#">Sed ut perspiciatis unde</a></h4>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. </li>
        <li><strong>June 14, 2010</strong>
          <h4><a href="#">Neque porro quisquam est</a></h4>
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit consequuntur magni. </li>
        <li><strong>May 29, 2010</strong>
          <h4><a href="#">Minima veniam, quis nostrum</a></h4>
          Uis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae. </li>
      </ul-->
    </aside>

    <?php

        if(!empty($_GET['p'])){
              $p=$_GET['p'];
       				include('pages/'.$p.'.php');
       			}

        else {
          if (empty($_SESSION['hak'])) {
            include('home.php');
          }
       		else	{
            include('home.php');
          }
       		}

     		?>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Bina Sarana Informatika</p>
    <p class="rf">Insani Book Store</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
