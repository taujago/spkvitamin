<style type="text/css">
	
span.select2-container {
    z-index:10050;
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
				<th width="50%">GEJALA</th>
				 
				<th width="10%">PROSES</th>
				 
			</tr>
		</thead>
		<tbody>
<?php 
$n=0;
foreach($record->result() as $row) : 
	$n++;
?>
			<tr>
				<th scope="row"><?php echo $n ?></th>
				<td><?php echo $row->kode; ?></td>
				<td><?php echo $row->gejala; ?></td>
				 
				<td>
					<a href="#!"  onclick="edit('<?php echo $row->id; ?>','<?php echo $row->kode; ?>','<?php echo $row->gejala; ?>' );"  class="btn btn-warning text-light"><i class="fa fa-pencil"></i>Edit</a>
					<a href="#!" onclick="hapus('<?php echo $row->id; ?>');"  class="btn btn-danger text-light"><i class="fa fa-trash"></i>Hapus	</a>
</td>
			</tr>
<?php endforeach; ?> 
		</tbody>
	</table>
</div>
<!-- table-responsive -->


<div class="modal fade" id="formModal" tabindex="-1"  role="dialog"  aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judul">Tambah Data Gejala </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="overflow:hidden;">
				<form id="frmkriteria">
					<div class="form-group">
						<label for="kode" class="form-control-label">Kode :</label>
						<input type="text" name="kode" class="form-control" id="kode">
					</div>
					<div class="form-group">
						<label for="gejala" class="form-control-label">Gejala:</label>
						<input type="text" min="0" name="gejala" class="form-control" id="gejala">

					</div>

					 
					<div class="form-group">
						<label for="gejala" class="form-control-label">Vitamin :</label>

						<?php 
	$arr_vitamin = $this->cm->arr_dropdown_vitamin();
	$arr_vitamin = array();
	echo form_dropdown("id_vitamin[]",$arr_vitamin,'','id="id_vitamin" class="form-control" multiple="multiple" style="width:100%"');

	?>
  

					</div>

<input type="hidden" name="id" id="id">

				</form>
			</div>
			<div class="modal-footer">
				
				<button id="btnsimpan" type="button" class="btn btn-primary"><i class="fa fa fa-paper-plane"></i> SIMPAN</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?php 
$this->load->view($this->controller."_view_js");
?>