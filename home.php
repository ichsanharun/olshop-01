<section id="content">
  <div id="banner">
    <h2>Trusted <span>Book Store <span>Since 2017</span></span></h2>
  </div>
  <div class="inside">
    <h2>Recent <span>Books</span></h2>
    <ul class="list" style="border-color:#000; text-align:center">

      <?php
      $input_cari = @$_POST['input_cari'];
      $cari = @$_POST['cari'];
      $sqldetail = "SELECT * FROM buku";
      // jika tombol cari di klik
      if($cari) {
       // jika kotak pencarian tidak sama dengan kosong
      if($input_cari != "") {
      /*while ($data = $querydetail->fetch_array()) {
        $format = $data['tanggal_lahir_pasien'];
        $tanggal = date('d F Y', strtotime( $format ));*/
        $sql = $mysqli->query("select * from buku where judul_buku like '%$input_cari%'") or die (mysqli_error());
        } else {
        $sql = $mysqli->query($sqldetail);
        }
        } else {
        $sql = $mysqli->query($sqldetail);
        }

        // mengecek data
       $cek = mysqli_num_rows($sql);
       // jika data kurang dari 1
       if($cek < 1) {
        ?>
        <h4>Data Tidak Ditemukan</h4>
         </tr>
        <?php
       } else {
         // mengulangi data agar tidak hanya 1 yang tampil
         while ($databook = $sql->fetch_array()) {
           ?>
           <li><span><img style="width:50%;height:100px" src="images/buku/<?php echo $databook['gambar']; ?>"></span>
             <h4><a href="pages/aksi_beli.php?act=add&id=<?php echo $databook['id_buku']; ?>" title="Click To Buy"><?php echo $databook['judul_buku']; ?></a></h4>
             <h5><?php echo "Rp ".number_format($databook['harga_buku'], 0, ',', '.'); ?></h5>
           </li><?php }} ?>
         </ul>


    <!--h2>Move Forward <span>With Your Education</span></h2>
    <p><span class="txt1">Eusus consequam</span> vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. </p>
    <div class="img-box"><img src="images/1page-img.jpg">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. Nuncrhoncus eros <a href="#">maurien ulla</a> facilis tor mauris tincidunt et vitae morbi. Velelit condimentes in laorem quis nullamcorper nam fauctor feugiat pellent sociis.</div>
    <p class="p0">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a <a href="#">non laorem</a> lacingilla wisi.</p-->
  </div>
</section>
