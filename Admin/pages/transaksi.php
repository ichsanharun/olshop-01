<?php

include ('../connection.php');

$id = $_SESSION['id'];
$q = "SELECT * FROM transaksi";
$queryq = $mysqli->query($q);
?>
<script>

</script>
<div id="page-wrapper">

    <div class="container-fluid">

       <div class="row">
           <div class="col-lg-12">
                <div class="panel panel-green">
                  <h1 class="panel-heading panel-title">Data Riwayat Transaksi</h1>
                    <div class="panel-body">
                      <div class="table-responsive" style="height:200px">
                          <table class="table table-bordered table-hover table-striped">
                              <thead>
                                   <tr>
                                     <th>Trans Code</th>
                                     <th>Order Date</th>
                                     <th>Price Total</th>
                                     <th>Status Pembayaran</th>
                                     <th></th>
                                   </tr>
                               </thead>
                               <tbody>
                                 <?php $no=0;
                                 while ($rstrans = mysqli_fetch_array ($queryq)){
                                   ?>
                                   <tr>
                                      <td><?php echo "$rstrans[no_transaksi]"; ?></td>
                                      <td>
                                          <?php echo "$rstrans[tgl_beli]"; ?>
                                      </td>
                                      <td>
                                          <?php echo "$rstrans[total_bayar]"; ?>
                                      </td>
                                      <td>
                                          <?php echo "$rstrans[status_pembayaran]"; ?>
                                      </td>
                                      <td>
                                           <a class="btn btn-danger" href="index.php?hal=view_act&act=view&id=<?php echo "$rstrans[no_transaksi]"; ?>">Order Detail</a>
                                      </td>
                                    </tr>
                                  <?php } ?>
                                </tbody>
                           </table>
                       </div>
                    </div>

                </div>

            </div>
          </div>
          <!-- /.row -->

          <div class="row">
              <div class="col-lg-12">
                   <div class="panel panel-green">
                     <h1 class="panel-heading panel-title">Order Detail</h1>
                       <div class="panel-body">
                         <div class="table-responsive" style="height:200px">
                             <table class="table table-bordered table-hover table-striped">
                                 <thead>
                                      <tr>
                                        <th>No.</th>
                                        <th>Book Title</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Sub Total</th>
                                        <th>Order Detail</th>
                                      </tr>
                                  </thead>
                                  <form action="pages/transaksi_aksi.php" method="post">

                                  <tbody>
                                    <?php
                                    if (isset($_SESSION['items'])) {
                                        foreach ($_SESSION['items'] as $key => $val){
                                          $sql = "SELECT * FROM transaksi INNER JOIN detail_transaksi INNER JOIN buku ON `transaksi`.`no_transaksi` = `detail_transaksi`.`no_transaksi` AND `detail_transaksi`.`id_buku` = `buku`.`id_buku` WHERE `detail_transaksi`.`no_transaksi` = '$key'";
                                          $querysql = $mysqli->query($sql);

                                          $no=0;
                                          while ($rsq = mysqli_fetch_array ($querysql)) {
                                          $no++;
                                     ?>
                                     <tr>
                                         <td><?php echo "$no"; ?> </td>
                                         <input hidden="true" name="no_trans" value="<?php echo "$rsq[no_transaksi]"; ?>">
                                         <td>
                                             <?php echo "$rsq[judul_buku]"; ?>
                                         </td>
                                         <td>
                                             <?php echo "$rsq[harga_buku]"; ?>
                                         </td>
                                         <td>
                                              <?php echo "$rsq[jumlah_beli]" ?>
                                         </td>
                                         <td>
                                              <?php echo "$rsq[subtotal]" ?>
                                         </td>
                                         <td>
                                              <?php echo "$rsq[status_pembayaran]" ?>
                                         </td>
                                     </tr><?php $total = $rsq['total_bayar'];
                                                $notrans = $rsq['no_transaksi'];
                                                $status = $rsq['status_pembayaran'];
                                          ?>
                                   <?php }} ?>
                                     <tr>
                                         <th colspan="4">Total</td>
                                         <th>
                                             <?php echo "$total" ?>
                                         </th>
                                         <td>
                                           <?php
                                            ?><a href="index.php?hal=view_act&act=del&id=<?php echo "$notrans"; ?>" class="btn btn-danger fa fa-arrow-circle-left">X</a> ||

                                            <?php
                                            if ($status == "Payment Canceled") {?>
                                              <button type="submit" class="btn btn-danger fa fa-arrow-circle-left">Confirm by Admin</a>
                                            <?php }
                                            elseif ($status == "Payment Confirmed") {
                                              ?>
                                                <button type="submit" name="cancel" value="cancel" class="btn btn-danger fa fa-arrow-circle-left">Cancel</a>
                                              <?php
                                            }
                                            else{

                                            }
                                           ?>
                                         </td>
                                     </tr>
                                   <?php } ?>
                                  </tbody>
                                </form>
                              </table>
                          </div>
                       </div>

                   </div>

               </div>
             </div>
             <!-- /.row -->


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
