<h4>DATA PENGETAHUAN PER VITAMIN</h4>
<div class="table-responsive">
	<table id="tabel1" class="table table-bordered card-table table-vcenter text-nowrap">
	<thead>
		<tr>
			<th rowspan="2"><strong>NO.</strong></strong></th>
			<TH rowspan="2"><strong>KODE </strong></strong></TH>
			<TH rowspan="2"><strong>VITAMIN</strong></strong> </TH>
			<th style="text-align: center;" align="center" colspan="<?php echo $rec_gejala->num_rows(); ?>" ><strong>GEJALA</strong></strong></th>
		</tr>
		<tr>
			<?php foreach($rec_gejala->result() as $kol) : ?>
				<th><strong><?php echo $kol->kode; ?></strong></th>
			<?php endforeach; ?>
		</tr>
	</thead>

	<tbody>
		
	<?php 
	foreach($data as $row) : 
	?>
	<tr>
		<?php foreach($row as $x):  ?>
			<td><?php echo $x; ?> </td>
		<?php endforeach; ?>

	</tr>

	<?php endforeach; ?>
	</tbody>

	</table>
</div>

<BR /> <BR /> <BR />


<h4>DATA PENGETAHUAN PER GEJALA</h4>
<div class="table-responsive">
	<table id="tabel2" class="table table-bordered card-table table-vcenter text-nowrap">
	<thead>
		<tr>
			<th rowspan="2"><strong>NO.</strong></strong></th>
			<TH rowspan="2"><strong>KODE </strong></strong></TH>
			<TH rowspan="2"><strong>GEJALA</strong></strong> </TH>
			<th align="center" colspan="<?php echo $rec_vitamin->num_rows(); ?>" ><strong>VITAMIN</strong></strong></th>
		</tr>
		<tr>
			<?php foreach($rec_vitamin->result() as $kol) : ?>
				<th><strong><?php echo $kol->kode; ?></strong></th>
			<?php endforeach; ?>
		</tr>
	</thead>

	<tbody>
		
	<?php 
	// show_array($data_gejala); exit;
	foreach($data_gejala as $rw) : 
		// show_array($rw); exit;
	?>
	 <tr>
		<?php foreach($rw as $x):  ?>
			<td><?php echo $x; ?> </td>
		<?php endforeach; ?>

	</tr> 

	<?php endforeach; ?>
	</tbody>

	</table>
</div>
<script type="text/javascript">
$(document).ready(function(){
	// $("#tabel1").dataTable();
});
</script>