<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="card" style="width: 60%; margin-bottom: 100px">
<div class="card-body">

	<form method="POST" action="<?php echo base_url('admin/dataKeluarga/tambahDataAksi') ?>" enctype="multiprt/form-data">

		<div class="form-group">
			<label>Nomor Kartu Keluarga</label>
			<input type="number" name="no_kk" class="form control" placeholder="Nomor Kartu Keluarga" required>
			<?php echo form_error('no_kk','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Kepala Keluarga</label>
			<input type="text" name="kepala" class="form control" placeholder="Kepala Keluarga" required>
			<?php echo form_error('kepala','<div class="text-small text-danger"></div>')
			?>
		</div>

			<div class="form-group">
			<label>Desa</label>
			<input type="text" name="desa" class="form control" placeholder="Desa" required>
			<?php echo form_error('desa','<div class="text-small text-danger"></div>')
			?>
		</div>

			<div class="form-group">
			<label>RT/RW</label>
			<input type="text" name="rt" class="form control" placeholder="RT" required>
			<?php echo form_error('rt','<div class="text-small text-danger"></div>')
			?>
			<input type="text" name="rw" class="form control" placeholder="RW" required>			
			<?php echo form_error('rw','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Kecamatan</label>
			<input type="text" name="kec" class="form control" placeholder="Kecamatan" required>
			<?php echo form_error('kec','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Kabupaten</label>
			<input type="text" name="kab" class="form control" placeholder="Kabupaten" required>
			<?php echo form_error('kab','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Provinsi</label>
			<input type="text" name="prov" class="form control" placeholder="Provinsi" required>
			<?php echo form_error('prov','<div class="text-small text-danger"></div>')
			?>
		</div>



		<div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
	


	 </form>

   </div>
</div>


</div>