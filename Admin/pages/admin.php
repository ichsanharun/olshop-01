<?php

include ('../connection.php');

$id = $_SESSION['id'];
$sqldetail = "SELECT * FROM admin WHERE id_admin != '$id'";
$querydetail = $mysqli->query($sqldetail);

?>
<div id="page-wrapper">

    <div class="container-fluid">

       <div class="row">
           <div class="col-lg-12">
                <div class="panel panel-green">
                  <h1 class="panel-heading panel-title">Data Admin</h1>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <?php
?>
                          <table class="table table-bordered table-hover table-striped">
                              <thead>
                                   <tr>
                                       <th>ID Admin</th>
                                       <th>Admin Name</th>
                                       <th>Admin Address</th>
                                       <th>Admin Telp.</th>
                                       <th>E-mail</th>
                                       <th>Option</th>
                                   </tr>
                               </thead>
                               <tbody>
                                 <?php
                                 while ($data = $querydetail->fetch_array()) {
                                   ?>
                                   <tr>
                                       <td><?php echo "$data[id_admin]"; ?></td>
                                       <td><?php echo "$data[nama_admin]"; ?></td>
                                       <td><?php echo "$data[alamat_admin]"; ?></td>
                                       <td><?php echo "$data[no_telp_admin]"; ?></td>
                                       <td><?php echo "$data[email_admin],";// echo date('d F Y', strtotime( $data['tanggal_lahir_dokter'] )); ?></td>

                                       <td>
                                        <a href="index.php?hal=admin_edit&id=<?php echo "$data[id_admin]"; ?>" class="fa fa-fw fa-edit" title="edit"></a>
                                        <button class="btn btn-xs btn-danger"><a href="index.php?hal=admin_delete&id=<?php echo "$data[id_admin]"; ?>" title="Delete"
                                          onclick="javascript: return confirm('You sure want tp delete <?php echo "$data[id_admin]"; ?>?')"
                                          class="fa fa-fw fa-trash" style="color:#fff"></a></button>
                                       </td>
                                   </tr>
                                   <?php
                                 }
                                  ?>
                               </tbody>
                           </table>
                <button class="btn btn-default"><a href="index.php?hal=admin_add"><i class="fa fa-fw fa-plus" style="color:#000"></i>Tambah</a></button>
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
