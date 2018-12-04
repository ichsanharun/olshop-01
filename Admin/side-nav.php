<?php if (empty($_SESSION['hak'])){ ?>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
          <li class="text-center">
              <img src="img/pre.jpg" alt="gambar profil" width="90%"><br>
          </li>
      </ul>
  </div>
<?php
  }

      elseif (!empty($_SESSION['hak'])){ ?>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="text-center">
              <!img src="img/logo.png"  alt="gambar profil" width="90%"><br>
              <a><strong><?php echo $_SESSION['nama']; ?></strong><br>
                <?php echo $_SESSION['hak']; ?></a>
              </li>
                <li>
                  <a href="index.php?hal=home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                </li>
                <li>
                  <a href="#" data-toggle="collapse" data-target="#product"><i class="fa fa-fw fa-edit"></i> Manage Product <i class="fa fa-fw fa-caret-down"></i></a>
                  <ul id="product" class="collapse">
                    <li>
                      <a href="index.php?hal=book"><i class="fa fa-fw fa-book"></i> Manage Book</a>
                    </li>
                    <li>
                      <a href="index.php?hal=category"><i class="fa fa-fw fa-list"></i> Manage Category</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="#" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i> User Management <i class="fa fa-fw fa-caret-down"></i></a>
                  <ul id="demo" class="collapse">
                    <li>
                      <a href="index.php?hal=admin"><i class="fa fa-fw fa-user"></i> Manage Admin</a>
                    </li>
                    <li>
                      <a href="index.php?hal=customer"><i class="fa fa-fw fa-user"></i> Manage Customer</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="index.php?hal=transaksi"><i class="fa fa-fw fa-shopping-cart"></i> Transaction</a>
                </li>




  </ul>
</div>
<?php } ?>
