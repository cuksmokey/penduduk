<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<?php echo $this->session->flashdata('pesan') ?> 

<a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/dataKeluarga/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Data Keluarga</a>

<table class="table table-striped table-bordered mt-2">
	<tr>
		<th class="text-center">No</th>
		<th class="text-center">Nomor Kartu Keluarga</th>
		<th class="text-center">Kepala Keluarga</th>
		<th class="text-center">Alamat</th>
		<th class="text-center">Anggota Keluarga</th>
		<th class="text-center">Action</th>
	</tr>

		<?php $no=1; foreach($keluarga as $p) : ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $p->no_kk ?></td>
		<td><?php echo $p->kepala ?></td>
		<td>
		     <?php echo $p->desa; ?>
   			 RT
			 <?php echo $p->rt; ?>/ RW
		     <?php echo $p->rw; ?>.
		     </td>
		     <td>
		     <center>
		     	<a class="btn btn-sm btn-info" href="<?php echo base_url('admin/dataPenduduk/viewData/' .$p->id_kk) ?>"><i class="fas fa-user"></i></a>
		     </center>
		     </td>
		<td> 
			<center>
				<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataKeluarga/updateData/' .$p->id_kk) ?>"><i class="fas fa-edit"></i></a>
				<a onclick="return confirm('Yakin Hapus')"class="btn btn-sm btn-danger" href="<? echo base_url('admin/dataKeluarga/deleteData/'.$p->id_kk) ?>"><i class="fas fa-trash"></i></a>
			</center>
		</td>
	</tr>
<?php endforeach; 
?>
</table>



</div>

