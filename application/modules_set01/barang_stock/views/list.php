<?php
    $ENABLE_ADD     = has_permission('Setup_stock.Add');
    $ENABLE_MANAGE  = has_permission('Setup_stock.Manage');
    $ENABLE_VIEW    = has_permission('Setup_stock.View');
    $ENABLE_DELETE  = has_permission('Setup_stock.Delete');
?>
<style type="text/css">
thead input {
	width: 100%;
}
</style>
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">

<div class="box">
	<div class="box-header">
		<?php if ($ENABLE_ADD) : ?>
			<a class="btn btn-success" href="javascript:void(0)" title="Add" onclick="add_data()"><i class="fa fa-plus">&nbsp;</i>New</a>

			<span class="pull-right">
				<?php echo anchor(site_url('setup_stock/downloadExcel'), ' <i class="fa fa-download"></i> Excel ', 'class="btn btn-primary btn-sm"'); ?>
				<a class="btn btn-primary btn-sm" data-toggle="modal" href="#dialog-rekap" title="Pdf" onclick="PreviewRekap()"><i class="fa fa-print">&nbsp;</i>PDF</a>
			</span>

		<?php endif; ?>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
		<thead>
		<tr>
			<th width="5">#</th>
			<th>Kode Produk</th>
			<th>Nama Set</th>
			<th>Jenis Produk</th>
			<th>Satuan</th>
			<th>Qty Stock</th>
			<th>Qty Available</th>
			<th>Qty Rusak</th>
			<th>Landed Cost</th>
			<th>Harga</th>
			<th>Status</th>
			<?php if($ENABLE_MANAGE) : ?>
			<th width="50">Action</th>
			<?php endif; ?>
		</tr>
		</thead>

		<tbody>
		<?php
		//print_r($results);
		if(empty($results)){
		}else{
			$numb=0; foreach($results AS $record){ $numb++; ?>
		<tr>
			<?php
				if($record->satuan==''){
					$satuan = $record->setpcs;
				}else{
					$satuan = $record->satuan;
				}
			?>
		    <td><?= $numb; ?></td>
	        <td><?= $record->id_barang ?></td>
			<td><?= $record->nm_barang ?></td>
			<td><?= strtoupper($record->jenis) ?></td>
			<td><?= $satuan ?></td>
			<td><?= $record->qty_stock ?></td>
			<td><?= $record->qty_avl ?></td>
			<td><?= $record->qty_rusak ?></td>
			<td><?= number_format($record->landed_cost) ?></td>
			<td><?= number_format($record->harga) ?></td>
			<td>
				<?php if($record->sts_aktif == 'aktif'){ ?>
					<label class="label label-success">Aktif</label>
				<?php }else{ ?>
					<label class="label label-danger">Non Aktif</label>
				<?php } ?>
			</td>
			<td style="padding-left:20px">
			<?php if($ENABLE_VIEW) : ?>
				<a href="#dialog-popup" data-toggle="modal" onclick="PreviewPdf('<?=$record->id_barang?>')">
				<span class="glyphicon glyphicon-print"></span>
				</a>
			<?php endif; ?>

      <?php if($ENABLE_MANAGE) : ?>
        <a title="Edit" class="text-green" href="#dialog-edit" data-toggle="modal" onclick="edit('<?php echo $record->id_barang?>')">
         <span class="glyphicon glyphicon-edit"></span>
        </a>
			<?php endif; ?>

			<?php if($ENABLE_DELETE) : ?>
				<a class="text-red" href="javascript:void(0)" title="Delete" onclick="delete_data('<?=$record->id_barang?>')"><i class="fa fa-trash"></i>
				</a>
			<?php endif; ?>
			</td>
		</tr>
		<?php } }  ?>
		</tbody>

		<tfoot>
		<tr>
			<th width="5">#</th>
			<th>Kode Produk</th>
			<th>Nama Set</th>
			<th>Jenis Produk</th>
			<th>Satuan</th>
			<th>Qty Stock</th>
			<th>Qty Available</th>
			<th>Qty Rusak</th>
			<th>Landed Cost</th>
			<th>Harga</th>
			<th>Status</th>
			<?php if($ENABLE_MANAGE) : ?>
			<th width="50">Action</th>
			<?php endif; ?>
		</tr>
		</tfoot>
		</table>
	</div>
	<!-- /.box-body -->
</div>

<div id="form-area">
<?= $this->load->view('barang/barang_form') ?>
</div>

<!-- awal untuk modal dialog -->
<!-- Modal -->
<div class="modal modal-primary" id="dialog-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="fa fa-file-pdf-o"></span>&nbsp;Edit Produk</h4>
      </div>
      <div class="modal-body" id="MyModalBodyEdit">
		...
      </div>
      <div class="modal-footer">
        <button type="button" name="save" class="btn btn-info" id="submit" onclick="savebarang()">Simpan</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">
        <span class="glyphicon glyphicon-remove"></span>  Tutup</button>
        </div>
    </div>
  </div>
</div>

<div class="modal modal-primary" id="dialog-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="fa fa-file-pdf-o"></span>&nbsp;Data Produk</h4>
      </div>
      <div class="modal-body" id="MyModalBody">
		...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">
        <span class="glyphicon glyphicon-remove"></span>  Tutup</button>
        </div>
    </div>
  </div>
</div>


<!-- DataTables -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>

<!-- page script -->
<script type="text/javascript">

  	$(function() {
    	$('#example1 thead tr').clone(true).appendTo( '#example1 thead' );
	    $('#example1 thead tr:eq(1) th').each( function (i) {
	        var title = $(this).text();
	        //alert(title);
	        if (title == "#" || title =="Action" ) {
	        	$(this).html( '' );
	        }else{
	        	$(this).html( '<input type="text" />' );
	        }

	        $( 'input', this ).on( 'keyup change', function () {
	            if ( table.column(i).search() !== this.value ) {
	                table
	                    .column(i)
	                    .search( this.value )
	                    .draw();
	            }else{
	            	table
	                    .column(i)
	                    .search( this.value )
	                    .draw();
	            }
	        } );
	    } );

	    var table = $('#example1').DataTable( {
	        orderCellsTop: true,
	        fixedHeader: true
	    } );
    	$("#form-area").hide();
  	});

  	function add_data(){

			var url = 'barang_stock/create/';
			$(".box").hide();
			$("#form-area").show();

			$("#form-area").load(siteurl+url);

		    $("#title").focus();

	  }

  	function edit_data(kodebarang){
		if(kodebarang!=""){
			var url = 'barang_stock/edit/'+kodebarang;
			$(".box").hide();
			$("#form-area").show();

			$("#form-area").load(siteurl+url);

		    $("#title").focus();
		}
	}

  function edit(id){
    url = siteurl+'barang_stock/edit/'+id;
    $.post(url,{'ID':id},function(result){
      $("#MyModalBodyEdit").html(result);
    });
  }

	//Delete
	function delete_data(id){
		//alert(id);
		swal({
		  title: "Anda Yakin?",
		  text: "Data Akan Terhapus secara Permanen!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "Ya, delete!",
		  cancelButtonText: "Tidak!",
		  closeOnConfirm: false,
		  closeOnCancel: true
		},
		function(isConfirm){
		  if (isConfirm) {
		  	$.ajax({
		            url: siteurl+'setup_stock/hapus_barang/'+id,
		            dataType : "json",
		            type: 'POST',
		            success: function(msg){
		                if(msg['delete']=='1'){
		                    //swal("Terhapus!", "Data berhasil dihapus.", "success");
		                    swal({
		                      title: "Terhapus!",
		                      text: "Data berhasil dihapus",
		                      type: "success",
		                      timer: 1500,
		                      showConfirmButton: false
		                    });
		                    window.location.reload();
		                } else {
		                    swal({
		                      title: "Gagal!",
		                      text: "Data gagal dihapus",
		                      type: "error",
		                      timer: 1500,
		                      showConfirmButton: false
		                    });
		                };
		            },
		            error: function(){
		                swal({
	                      title: "Gagal!",
	                      text: "Gagal Eksekusi Ajax",
	                      type: "error",
	                      timer: 1500,
	                      showConfirmButton: false
	                    });
		            }
		        });
		  } else {
		    //cancel();
		  }
		});
	}

	function PreviewPdf(id)
	{
		param=id;
		tujuan = 'setup_stock/print_request/'+param;

	   	$(".modal-body").html('<iframe src="'+tujuan+'" frameborder="no" width="570" height="400"></iframe>');
	}

	function PreviewRekap()
	{
		tujuan = 'setup_stock/print_rekap';
	   	$(".modal-body").html('<iframe src="'+tujuan+'" frameborder="no" width="100%" height="400"></iframe>');
	}

</script>
