
<!-- saved from url=(0061)http://student.nusamandiri.ac.id/cetak_khs.aspx?id=1502098062 -->
<html><head><meta http-equiv="Content-Type" content="text/html; chadetailet=windows-1252">
  <?php

  include ('../koneksi/koneksi.php');

  $id = $_GET['id'];
  $sqldetail = "SELECT * FROM transaksi WHERE no_trans = '$id'";
  $querydetail = $mysqli->query($sqldetail);
  //"UPDATE guru set nama_guru = ";
  ?>
<title>Bukti Transaksi</title>
</head>
<body>

  <link rel="stylesheet" href="stylect.css" type="text/css"><p>
</p><div>
 <!-- Memulai Aplikasi Dari Sini -->
<div>
<div id="aplikasicetak">
  <div >
  <table  border="0"><tbody><tr><td>
  <table  border="0">
    <tbody>
      <tr>
        <td rowspan="3" width="15%">
          <img src="../img/portfolio/logo.jpeg" width="100%">
        </td>
        <td align="right">
          <p>Jl. Jengki Cipinang Asem Rt.02/12 No.11C</p>
        </td>
      </tr>
    <tr>
      <td align="right"><p>Kebon Pala Makasar, Jakarta Timur</p>
      </td>
    </tr>
    <tr>
      <td align="right"><p>Telp. (021) 8002639</p>
      </td>
    </tr>
  </tbody></table>
  </div>
		<div class="ahead"><hr>BUKTI TRANSAKSI RAWAT JALAN</hr></div>

		<table border="0" cellpadding="0" cellspacing="0" width="100%">
         <tbody>
           <?php while ($detail = $querydetail->fetch_array()) {?>
        <tr>
          <td colspan="3" align="left"><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="-1">&nbsp;</font></strong></td>
        </tr>
        <tr>
          <td width="20%" align="left"><font size="-1">No. Trans</font></td>
          <td width="2%" align="left"><strong><font color="#000000" size="-1">:</font></strong></td>
          <td width="75%" align="left"><strong><font color="#000000" size="-1"><?php echo "$detail[no_trans]"; ?></font></strong></td>
        </tr>
        <tr>
          <td width="20%" align="left"><font size="-1">No. Rekam Medis</font></td>
          <td width="2%" align="left"><strong><font color="#000000" size="-1">:</font></strong></td>
          <td width="75%" align="left"><strong><font color="#000000" size="-1"><?php echo "$detail[no_rm]"; ?></font></strong></td>
        </tr>
        <!--tr>
          <td width="33%" align="left"><font size="-1">UMUR</font></td>
          <td width="2%" align="left"><strong><font color="#000000" size="-1">:</font></strong></td>
          <td width="65%" align="left"><strong><font color="#000000" size="-1">SISTEM INFORMASI</font></strong></td>
        </tr-->
        <tr>
          <?php  $array_bln= array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); ?>
          <td width="20%" align="left"><font size="-1">Tanggal Transaksi</font></td>
          <td width="2%" align="left"><strong><font color="#000000" size="-1">:</font></strong></td>
          <td width="75%" align="left"><strong><font color="#000000" size="-1"><?php echo date('d', strtotime( $detail['tanggal_transaksi'] ))." "; echo $array_bln[date('n', strtotime( $detail['tanggal_transaksi'] ))]; echo " ".date('Y', strtotime( $detail['tanggal_transaksi'] )) ?></font></strong></td>
        </tr>
        <table border="1" class="table table-bordered table-hover table-striped">

                 <tr>
                     <th>Diagnosa</th>
                     <th>Biaya Obat</th>
                     <th>Biaya Perawatan</th>
                     <th>Biaya Cek Lab</th>
                     <th>Total Harga</th>
                 </tr>

                 <tr>

                     <td>
                         <?php echo "$detail[diagnosa]"; ?>
                     </td>
                     <td><?php echo "$detail[biaya_obat]"; ?></td>
                     <td>
                         <?php echo "$detail[harga_rawat]"; ?>
                     </td>
                     <td>
                         <?php echo "$detail[harga_cek_lab]"; ?>
                     </td>
                     <td>
                         <?php echo "$detail[total_harga]"; ?>
                     </td>
                 </tr>


         </table>

        <?php } ?>
              </div></td>
            </tr>
            </tbody></table>

</td>
</tr>
</tbody></table>


</body></html>
