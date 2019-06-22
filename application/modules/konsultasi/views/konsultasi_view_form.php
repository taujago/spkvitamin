
	
</script>

<!-- <H4> PILIH GEJALA PENYAKIT </H4> -->

<form class="inline" id="frmkriteria" method="post" action="<?php echo site_url("konsultasi/index2") ?>">







<div class="row">

<!-- <div class="col-md-12">
<div class="form-group">
	<label for="nama"><strong><?php echo $_SESSION['userdata'][0]['nama'] ?> </strong></label>
	<input type="text" class="form-control" name="nama" />
</div>
</div>

<div class="col-md-6">
<div class="form-group">
	<label for="umur"><strong>Umur Pasien  </strong></label>
	<input type="number" min="0" class="form-control" name="umur" />
</div>
</div>


<div class="col-md-6">
<div class="form-group">
	<label for="umur"><strong>Jenis Kelamin </strong></label>
	<?php 
		$arr_jk = array("L"=>"Laki - laki ","P"=>"Perempuan");
		echo form_dropdown("jk",$arr_jk,'','id="jk" class="form-control"');
	?>
</div>
</div>





<div class="col-md-12">
<div class="form-group">
	<label for="hp"><strong>No. Handphone </strong></label>
	<input type="text" class="form-control" name="hp" />
</div>
</div>

<div class="col-md-12">
<div class="form-group">
	<label for="alamat"><strong>Alamat Pasien </strong></label>
	<input type="text" class="form-control" name="alamat" />
</div>
</div> -->
<div class="col-md-12">
	
<div class="form-group">
	<label for="gejala"><strong>Masukkan gejala yang dirasakan :   </strong></label>
	<?php 
	$arr_gejala = $this->cm->arr_dropdown_gejala();
	echo form_dropdown("gejala_id[]",$arr_gejala,'','id="gejala_id" class="form-control" multiple="multiple"');

	?>
</div>

</div>
 



</div>		

<div class="row mt-3">
	<div class="col-md-6">
   <button type="reset" class="btn btn-danger btn-block">RESET </button>
	</div>
	<div class="col-md-6">
   <button type="submit" class="btn btn-primary btn-block">LANJUTKAN </button>
	</div>
</div>

</form>

<div class="row mt-5">
	<div class="col-md-12">
		<h2> REFERENSI RULE </h2>
	 
<?php 
foreach($rec_vitamin->result() as $row) : 
?>
    <h4><?php echo $row->vitamin; ?></h4>
Gejala : <br />
    <ul>
    <?php  
        $rec_gejala = $this->cm->get_gejala_by_vitamin($row->id);
        foreach($rec_gejala->result() as $rg) : 

    ?>
        <li><?php  echo $rg->gejala; ?></li>
    <?php endforeach; ?>
    </ul>
<hr />
<?php endforeach; ?>

	</div>

</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#gejala_id").select2();
});
</script>

<?php 
// $this->load->view($this->controller."_view_js");
?>