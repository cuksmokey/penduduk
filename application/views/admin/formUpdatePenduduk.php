<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="card" style="width: 60%; margin-bottom: 100px">
<div class="card-body">

<?php foreach($penduduk as $p) : ?>
	<form method="POST" action="<?php echo base_url('admin/dataPenduduk/updateDataAksi') ?>" enctype="multipart/form-data">

		<div class="form-group">
			<label>NIK</label>
			<input type="hidden" name="id_pend" class="
			form control" value ="<?php echo $p->id_pend ?>">
			<input type="number" name="nik" class="form control"value ="<?php echo $p->nik ?>" required>
			<?php echo form_error('nik','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>NO KK</label>
			<!-- <input type="hidden" name="id_pend" class="
			form control" value ="<?php echo $p->id_pend ?>"> -->
			<input type="number" name="no_kk" class="form control"value ="<?php echo $p->no_kk ?>" required>
			<?php echo form_error('no_kk','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form control"value ="<?php echo $p->nama ?>"required>
			<?php echo form_error('nama','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>TTL</label>
			<input type="text" name="tempat_lh" class="form control"value ="<?php echo $p->tempat_lh ?>" required>
			<input type="date" name="tgl_lh" class="form control"value ="<?php echo $p->tgl_lh ?>">
			<?php echo form_error('tempat_lh','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select name="jekel" class="form control" required>
				<option value ="<?php echo $p->jekel ?>"><?php echo $p->jekel?></option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			<select>
			<?php echo form_error('jekel','<div class="text-small text-danger"></div>')
			?>
			</div>

			<div class="form-group">
			<label>Desa</label>
			<input type="text" name="desa" class="form control"value ="<?php echo $p->desa ?>" required>
			<?php echo form_error('desa','<div class="text-small text-danger"></div>')
			?>
		</div>

			<div class="form-group">
			<label>RT/RW</label>
			<input type="text" name="rt" class="form control"value ="<?php echo $p->rt ?>"required>
			<input type="text" name="rw" class="form control"value ="<?php echo $p->rw ?>"required>			
			<?php echo form_error('desa','<div class="text-small text-danger"></div>')
			?>
		</div>

			<div class="form-group">
			<label>Agama</label>
			<input type="text" name="agama" class="form control"value ="<?php echo $p->agama ?>"required>
			<?php echo form_error('agama','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Status Perkawinan</label>
			<select name="kawin" class="form control" required>
				<option value ="<?php echo $p->kawin?>"><?php echo $p->kawin?></option>
				<option value="kawin">Kawin</option>
				<option value="belum kawin">Belum Kawin</option>
			<select>
			<?php echo form_error('kawin','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Pekerjaan</label>
			<input type="text" name="pekerjaan" class="form control"value ="<?php echo $p->pekerjaan ?>"required>
			<?php echo form_error('pekerjaan','<div class="text-small text-danger"></div>')
			?>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form control" required>
				<option value ="<?php echo $p->status ?>"><?php echo $p->status ?></option>
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
	<?php endforeach; ?>

   </div>
</div>


</div>