<?php

include ('../connection.php');

$id = $_SESSION['id'];
$sqldetail = "SELECT * FROM buku";
$querydetail = $mysqli->query($sqldetail);
?>
<div id="page-wrapper">

    <div class="container-fluid">

       <div class="row">
           <div class="col-lg-12">
                <div class="panel panel-green">
                  <h1 class="panel-heading panel-title">Book Data</h1>
                    <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover table-striped">
                              <thead>
                                   <tr>
                                       <th>Book ID</th>
                                       <th>Book Title</th>
                                       <th>Price</th>
                                       <th>Stok</th>
                                       <th>View</th>
                                       <th>Category</th>
                                       <th>Option</th>
                                   </tr>
                               </thead>
                               <tbody>
                                 <?php
                                 while ($data = $querydetail->fetch_array()) {
                                   ?>
                                   <tr>
                                       <td><?php echo "$data[id_buku]"; ?></td>
                                       <td><?php echo "$data[judul_buku]"; ?></td>
                                       <td><?php echo "$data[harga_buku]"; ?></td>
                                       <td><?php echo "$data[stok]"; ?></td>
                                       <td><img style="height:70px" src="../images/buku/<?php echo "$data[gambar]"; ?>"></td>
                                       <td><?php echo "$data[id_kategori]"; ?></td>
                                       <td>
                                        <a href="index.php?hal=book_edit&id=<?php echo "$data[id_buku]"; ?>" class="fa fa-fw fa-edit" title="edit"></a>
                                        <button class="btn btn-xs btn-danger"><a href="index.php?hal=book_delete&id=<?php echo "$data[id_buku]"; ?>" title="Delete"
                                          onclick="javascript: return confirm('Wanna Delete Book Of <?php echo "$data[id_buku]"; ?>?')"
                                          class="fa fa-fw fa-trash" style="color:#fff"></a></button>
                                       </td>
                                   </tr>
                                   <?php
                                 }
                                  ?>
                               </tbody>
                           </table>
                <button class="btn btn-default"><a href="index.php?hal=book_add"><i class="fa fa-fw fa-plus" style="color:#000"></i>Add</a></button>
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
