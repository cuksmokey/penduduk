<?php

class dataPenduduk extends CI_controller
{
	public function index()
	{
		$data['title'] = "Data Penduduk";
		$data['penduduk'] = $this->pendudukModel->get_data('data_penduduk')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dataPenduduk', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambahData()
	{
		$data['title'] = "Tambah Data Penduduk";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/formTambahPenduduk', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambahDataAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambahData();
		} else {
			$nik						= $this->input->post('nik');
			$no_kk						= $this->input->post('no_kk');
			$nama						= $this->input->post('nama');
			$tempat_lh					= $this->input->post('tempat_lh');
			$tgl_lh					    = $this->input->post('tgl_lh');
			$jekel 				        = $this->input->post('jekel');
			$desa						= $this->input->post('desa');
			$rt						    = $this->input->post('rt');
			$rw						    = $this->input->post('rw');
			$agama				        = $this->input->post('agama');
			$kawin		                = $this->input->post('kawin');
			$pekerjaan					= $this->input->post('pekerjaan');
			$status					    = $this->input->post('status');
		}

		$data = array(
			'nik'					=> $nik,
			'no_kk'					=> $no_kk,
			'nama'					=> $nama,
			'tempat_lh'				=> $tempat_lh,
			'tgl_lh'				=> $tgl_lh,
			'jekel'			        => $jekel,
			'desa'				    => $desa,
			'rt'				    => $rt,
			'rw'				    => $rw,
			'agama'				    => $agama,
			'kawin'		            => $kawin,
			'pekerjaan'				=> $pekerjaan,
			'status'				=> $status,

		);

		$this->pendudukModel->insert_data($data, '
				data_penduduk');
		$this->session->set_flashdata('pesan', '<div 
				class="alert alert-success alert-dismissible 
				fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" 
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
		redirect('admin/dataPenduduk');
	}

	public function updateData($id)
	{
		$where = array('id_pend' => $id);
		$data['title'] = 'Update Data Penduduk';
		$data['penduduk'] = $this->pendudukModel->get_data('data_penduduk')->result();
		$data['penduduk'] = $this->db->query("SELECT * FROM data_penduduk WHERE id_pend='$id'")->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/formUpdatePenduduk', $data);
		$this->load->view('templates_admin/footer');
	}
	
	public function updateDataAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->updateData();
		} else {
			$id      					= $this->input->post('id_pend');
			$nik						= $this->input->post('nik');
			$no_kk						= $this->input->post('no_kk');
			$nama						= $this->input->post('nama');
			$tempat_lh					= $this->input->post('tempat_lh');
			$tgl_lh					    = $this->input->post('tgl_lh');
			$jekel 				        = $this->input->post('jekel');
			$desa						= $this->input->post('desa');
			$rt						    = $this->input->post('rt');
			$rw						    = $this->input->post('rw');
			$agama				        = $this->input->post('agama');
			$kawin		                = $this->input->post('kawin');
			$pekerjaan					= $this->input->post('pekerjaan');
			$status					    = $this->input->post('status');
		}

		$data = array(
			'nik'					=> $nik,
			'no_kk'					=> $no_kk,
			'nama'					=> $nama,
			'tempat_lh'				=> $tempat_lh,
			'tgl_lh'				=> $tgl_lh,
			'jekel'			        => $jekel,
			'desa'				    => $desa,
			'rt'				    => $rt,
			'rw'				    => $rw,
			'agama'				    => $agama,
			'kawin'		            => $kawin,
			'pekerjaan'				=> $pekerjaan,
			'status'				=> $status,

		);

		$where = array(
			'id_pend' => $id
		);

		$this->pendudukModel->update_data('data_penduduk', $data, $where);
		$this->session->set_flashdata('pesan', '<div 
				class="alert alert-success alert-dismissible 
				fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" 
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
		redirect('admin/dataPenduduk');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('no_kk', 'No KK', 'required');
		$this->form_validation->set_rules('tempat_lh', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lh', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jekel', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('desa', 'Desa', 'required');
		$this->form_validation->set_rules('rt', 'RT', 'required');
		$this->form_validation->set_rules('rw', 'RW', 'required');
		$this->form_validation->set_rules('kawin', 'Status Perkawinan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
	}

	public function deleteData($id)
	{
		$where = array('id_pend' => $id);
		$this->pendudukModel->delete_data($where, 'data_penduduk');
		$this->session->set_flashdata('pesan', '<div 
				class="alert alert-danger alert-dismissible 
				fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" 
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
		redirect('admin/dataPenduduk');
	}
}
