<?php

include ('../connection.php');

$id = $_SESSION['id'];
$sqldetail = "SELECT * FROM item INNER JOIN kategori ON item.id_kategori = kategori.id_kategori";
$querydetail = $mysqli->query($sqldetail);
?>
<div id="page-wrapper">

    <div class="container-fluid">

       <div class="row">
           <div class="col-lg-12">
                <div class="panel panel-green">
                  <h1 class="panel-heading panel-title">item Data</h1>
                    <div class="panel-body">

                          <table class="table table-bordered table-hover table-striped" id="item">
                              <thead>
                                   <tr>
                                       <th>No.</th>
                                       <th>Item ID</th>
                                       <th>Item Name</th>
                                       <th>Price</th>
                                       <th>Stok</th>
                                       <th>View</th>
                                       <th>Category</th>
                                       <th>Option</th>
                                   </tr>
                               </thead>
                               <tbody>
                                 <?php
                                 $n=0;
                                 while ($data = $querydetail->fetch_array()) {
                                   $n++;
                                   ?>
                                   <tr>
                                     <td><?php echo $n; ?></td>
                                       <td><?php echo "$data[id_item]"; ?></td>
                                       <td><?php echo "$data[nama_item]"; ?></td>
                                       <td><?php echo "$data[harga_item]"; ?></td>
                                       <td><?php echo "$data[stok]"; ?></td>
                                       <td><img style="height:70px" src="../images/buku/<?php echo "$data[gambar]"; ?>"></td>
                                       <td><?php echo "$data[nama_kategori]"; ?></td>
                                       <td>
                                        <a href="index.php?hal=item_edit&id=<?php echo "$data[id_item]"; ?>" class="fa fa-fw fa-edit" title="edit"></a>
                                        <a href="index.php?hal=item_delete&id=<?php echo "$data[id_item]"; ?>" title="Delete"
                                          onclick="javascript: return confirm('Wanna Delete Item Of <?php echo "$data[id_item]"; ?>?')"
                                          class="btn btn-xs btn-danger" style="color:#fff"><span class="fa fa-fw fa-trash"></span></a>
                                       </td>
                                   </tr>
                                   <?php
                                 }
                                  ?>
                               </tbody>
                           </table>
                <a href="index.php?hal=item_add"><button class="btn btn-default"><i class="fa fa-fw fa-plus" style="color:#000"></i>Add</button></a>

                    </div>

                </div>

            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
<script type="text/javascript">

$(document).ready( function () {
    $("#item").dataTable();
} );
</script>
