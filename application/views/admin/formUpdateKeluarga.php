<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="card" style="width: 60%; margin-bottom: 100px">
<div class="card-body">

<?php foreach($keluarga as $p) : ?>
	<form method="POST" action="<?php echo base_url('admin/dataKeluarga/updateDataAksi') ?>" enctype="multipart/form-data">

		<div class="form-group">
			<label>Nomor Kartu Keluarga</label>
			<input type="hidden" name="id_kk" class="
			form control" value ="<?php echo $p->id_kk ?>">
			<input type="number" name="no_kk" class="form control " value ="<?php echo $p->no_kk ?>" required>
			<?php echo form_error('no_kk','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Kepala Keluarga</label>
			<input type="text" name="kepala" class="form control"  value ="<?php echo $p->kepala?>" required>
			<?php echo form_error('kepala','<div class="text-small text-danger"></div>')
			?>
		</div>

			<div class="form-group">
			<label>Desa</label>
			<input type="text" name="desa" class="form control" value ="<?php echo $p->desa ?>" required>
			<?php echo form_error('desa','<div class="text-small text-danger"></div>')
			?>
		</div>

			<div class="form-group">
			<label>RT/RW</label>
			<input type="text" name="rt" class="form control"  value ="<?php echo $p->rt ?>" required>
			<?php echo form_error('rt','<div class="text-small text-danger"></div>')
			?>
			<input type="text" name="rw" class="form control" value ="<?php echo $p->rw ?>" required>			
			<?php echo form_error('rw','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Kecamatan</label>
			<input type="text" name="kec" class="form control"  value ="<?php echo $p->kec ?>" required>
			<?php echo form_error('kec','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Kabupaten</label>
			<input type="text" name="kab" class="form control"  value ="<?php echo $p->kab ?>" required>
			<?php echo form_error('kab','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Provinsi</label>
			<input type="text" name="prov" class="form control"  value ="<?php echo $p->prov ?>" required>
			<?php echo form_error('prov','<div class="text-small text-danger"></div>')
			?>
		</div>



		<div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
	


	 </form>
	 	<?php endforeach; ?>

   </div>
</div>


</div>