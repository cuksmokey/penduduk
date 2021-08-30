<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>


<a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/dataAnggota/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Anggota</a>

<?php echo $this->session->flashdata('pesan') ?> 
<table class="table table-striped table-bordered mt-2">
	<tr>
		<th class="text-center">NIK</th>
		<th class="text-center">Nama</th>
		<th class="text-center">Jenis Kelamin</th>
		<th class="text-center">Hubungan Keluarga</th>
		<th class="text-center">Action</th>
	</tr>

	<?php $no=1; foreach($keluarga as $p) : 
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $p->nik ?></td>
		<td><?php echo $p->nama ?></td>
		<td><?php echo $p->jekel ?></td>
		<td><?php echo $p->hubungan ?></td>
		<td> 
			<center>
				<a onclick="return confirm('Yakin Hapus')"class="btn btn-sm btn-danger" href="<? echo base_url('admin/dataAnggota/deleteData/'.$p->id_anggota) ?>"><i class="fas fa-trash"></i></a>
			</center>
		</td>
	</tr>
<?php endforeach; 
}
?>
</table>



</div>
