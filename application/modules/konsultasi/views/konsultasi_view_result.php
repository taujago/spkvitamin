<div class="card">
<div class="card-header">
	<h3 class="card-title">DATA DIAGNOSA </h3>
</div>
<div class="card-body">

<div class="row">
	<div class="col-md-3"><strong> Nama Pasien </strong></div>
	<div class="col-md-3">: <?php echo $userdata['nama']; ?> </div>

	<div class="col-md-3"><strong> Umur Pasien </strong></div>
	<div class="col-md-3">: <?php echo $userdata['umur']; ?> Tahun </div>

	<div class="col-md-3"><strong> JK </strong></div>
	<div class="col-md-3">: <?php echo $userdata['jk']; ?> </div>

	<div class="col-md-3"><strong> No. HP </strong></div>
	<div class="col-md-3">: <?php echo $userdata['hp']; ?> </div>

	<div class="col-md-3"><strong> Alamat </strong></div>
	<div class="col-md-3">: <?php echo $userdata['alamat']; ?> </div>
	<div class="col-md-3"><strong> Tanggal Pemeriksaan </strong></div>
	<div class="col-md-3">: <?php //echo flipdate($userdata['tanggal']); ?> </div>

</div>

<HR />

<?php 
if($found == 1 ) { 
?>

<div class="row">
	<div class="col-md-8">
<strong>Gejala yang dialami : </strong> <br />
<ol>
	<?php foreach($rec_gejala->result() as $row): ?>
		<li><?php echo $row->gejala; ?></li>
	<?php endforeach; ?>
</ol>
 
<br />
<strong>Hasil Diagnosa </strong>
<br />
<strong>Nama Penyakit : </strong> <br />
<?php   echo $penyakit->penyakit ; ?>
<br /><br />
<strong>Pencegahan : </strong><br />
<?php   echo $penyakit->pencegahan; ?>
<br />
<strong>Penanganan : </strong><br />
<?php   echo $penyakit->penanganan; ?>
</div>	
<div class="col-md-4">
	<?php 
$image = (!empty($row->gambar))?$row->gambar:"noimage.png";


	?>
	<img  src="<?php echo base_url("uploads/$image") ?>">
</div>
</div>
<?php } 
else {   ?> 


<div class="row">
	<div class="col-md-12">
		<h4> DATA TIDAK DITEMUKAN </h4>
	</div>

</div>



<?php } ?>


<!-- end of card -->
</div> 

</div>


  


 