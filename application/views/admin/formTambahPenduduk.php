<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="card" style="margin-bottom: 100px">
<div class="card-body">

	<form method="POST" action="<?php echo base_url('admin/dataPenduduk/tambahDataAksi') ?>" enctype="multipart/form-data">

		<div class="form-group">
			<label>NIK</label>
			<input type="number" name="nik" class="form control" placeholder="NIK" required>
			<?php echo form_error('nik','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>No KK</label>
			<input type="number" name="no_kk" class="form control" placeholder="NO KK" required>
			<?php echo form_error('no_kk','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form control" placeholder="Nama" required>
			<?php echo form_error('nama','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>TTL</label>
			<input type="text" name="tempat_lh" class="form control" placeholder="Tempat lahir" required>
			<input type="date" name="tgl_lh" class="form control" placeholder="Tanggal Lahir" required>
			<?php echo form_error('tempat_lh','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select name="jekel" class="form control" placeholder="Jenis Kelamin" required>
				<option>--Pilih Jenis Kelamin--</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			<select>
			<?php echo form_error('jekel','<div class="text-small text-danger"></div>')
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
			<label>Agama</label>
			<input type="text" name="agama" class="form control" placeholder="Agama" required>
			<?php echo form_error('agama','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Status Perkawinan</label>
			<select name="kawin" class="form control" placeholder="Status Perkawinan" required>
				<option>--Pilih Status Perkawinan--</option>
				<option value="kawin">Kawin</option>
				<option value="belum kawin">Belum Kawin</option>
			<select>
			<?php echo form_error('kawin','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Pekerjaan</label>
			<input type="text" name="pekerjaan" class="form control" placeholder="Pekerjaan" required>
			<?php echo form_error('pekerjaan','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form control" placeholder="Status" required>
				<option>--Pilih status--</option>
				<option value="Ada">Ada</option>
				<option value="Meninggal">Meninggal</option>
				<option value="Pindah">Pindah</option>
			<select>
			<?php echo form_error('status','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
	


	 </form>

   </div>
</div>


</div>