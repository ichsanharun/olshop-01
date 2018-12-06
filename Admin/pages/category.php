<?php

include ('../connection.php');

$id = $_SESSION['id'];
$sqldetail = "SELECT * FROM kategori";
$querydetail = $mysqli->query($sqldetail);
//"UPDATE guru set nama_guru = ";
?>
<div id="page-wrapper">

    <div class="container-fluid">

       <div class="row">
           <div class="col-lg-12">
                <div class="panel panel-green">
                  <h1 class="panel-heading panel-title">Category</h1>
                    <div class="panel-body">
                      
                          <table class="table table-bordered table-hover table-striped" id="kat">
                              <thead>
                                   <tr>
                                       <th>Category ID</th>
                                       <th>Category Name</th>
                                       <th>Option</th>
                                   </tr>
                               </thead>
                               <tbody>
                                 <?php
                                 while ($data = $querydetail->fetch_array()) {
                                   ?>
                                   <tr>
                                       <td><?php echo "$data[id_kategori]"; ?></td>
                                       <td><?php echo "$data[nama_kategori]"; ?></td>
                                       <td>
                                        <a href="index.php?hal=category_edit&id=<?php echo "$data[id_kategori]"; ?>" class="fa fa-fw fa-edit" title="edit"></a>
                                        <button class="btn btn-xs btn-danger"><a href="index.php?hal=category_delete&id=<?php echo "$data[id_kategori]"; ?>" title="Delete"
                                          onclick="javascript: return confirm('Wanna Delete category Of <?php echo "$data[id_kategori]"; ?>?')"
                                          class="fa fa-fw fa-trash" style="color:#fff"></a></button>
                                       </td>
                                   </tr>
                                   <?php
                                 }
                                  ?>
                               </tbody>
                           </table>
                <a href="index.php?hal=category_add"><button class="btn btn-default"><i class="fa fa-fw fa-plus" style="color:#000"></i>Add</button></a>
                       
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
        $("#kat").dataTable();
    } );

    </script>
