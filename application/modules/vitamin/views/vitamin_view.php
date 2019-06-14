

<style type="text/css">
	
span.select2-container {
    z-index:10050;
}

.swal2-container {
	z-index:10051;
}

</style>

<div class="row mb-3">
	<div class="col-md-3">
		<a href="#!" onclick="tambahbaru();" class="btn btn-success" ><i class="fa fa-plus"></i> TAMBAH BARU </a>
	</div>

</div>



<div class="table-responsive">
	<table id="tabel" class="table card-table table-vcenter  ">
		<thead >
			<tr>
				<th width="5%">NO </th>
				<th width="5%">KODE </th>
				<th width="10%">JENIS VITAMIN</th>
				<th width="50%">SUMBER VITAMIN</th>
				<th width="50%">FUNGSI</th>
			 
				<th width="10%">PROSES</th>
				 
			</tr>
		</thead>
		<tbody>
<?php 
$n=0;
foreach($record->result() as $row) : 
	$n++;

$image = (!empty($row->gambar))?$row->gambar:"noimage.png";


?>
			<tr>
				<th scope="row"><?php echo $n ?></th>
				<td><?php echo $row->kode; ?></td>
				<td><?php echo $row->vitamin; ?></td>
				<td><?php echo $row->sumber_vitamin; ?></td>
				<td><?php echo $row->fungsi; ?></td>
				 
				 
				<td>
					<a href="#!"  onclick="edit('<?php echo $row->id; ?>','<?php echo $row->kode; ?>','<?php echo $row->vitamin; ?>','<?php echo $row->sumber_vitamin; ?>','<?php echo $row->fungsi; ?>');"  class="mt-2 btn btn-warning text-light"><i class="fa fa-pencil"></i>Edit</a>
					<a href="#!" onclick="hapus('<?php echo $row->id; ?>');"  class="mt-2 btn btn-danger text-light"><i class="fa fa-trash"></i>Hapus	</a>
</td>
			</tr>
<?php endforeach; ?> 
		</tbody>
	</table>
</div>
<!-- table-responsive -->


<div class="modal fade" id="formModal" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judul">Tambah Data Vitamin </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>	
			<form id="frmkriteria" method="post" enctype="multipart/form-data" >
			<div class="modal-body">
			
					<div class="form-group">
						<label for="kode" class="form-control-label">Kode :</label>
						<input type="text" name="kode" class="form-control" id="kode">
					</div>
					<div class="form-group">
						<label for="vitamin" class="form-control-label">Vitamin :</label>
						<input type="text"  name="vitamin" class="form-control" id="vitamin">

					</div>

					<div class="form-group">
						<label for="sumber_vitamin" class="form-control-label">Sumber Vitamin :</label>
						<textarea class="form-control" name="sumber_vitamin" id="sumber_vitamin"></textarea>

					</div>

					<div class="form-group">
						<label for="fungsi" class="form-control-label">Fungsi :</label>
						<textarea class="form-control" name="fungsi" id="fungsi"></textarea>

					</div>

					 




					 



					<div class="form-group">
						<label for="gejala" class="form-control-label">Gejala :</label>

						<?php 
	// $arr_vitamin = $this->cm->arr_dropdown_vitamin();
	$arr_vitamin = array();
	echo form_dropdown("id_gejala[]",$arr_vitamin,'','id="id_gejala" class="form-control" multiple="multiple" style="width:100%"');

	?>
  

					</div>

<input type="hidden" name="id" id="id">

				
			</div>
			<div class="modal-footer">
				
				<button id="btnsimpan" type="submit" class="btn btn-primary"><i class="fa fa fa-paper-plane"></i> SIMPAN</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div> </form>
		</div>
	</div>
</div>

<?php 
$this->load->view($this->controller."_view_js");
?>