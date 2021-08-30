<?php

class dataKeluarga extends CI_controller
{
	public function index()
	{

		$data['title'] = "Data Kartu Keluarga";
		$data['keluarga'] = $this->pendudukModel->get_data('tb_kk')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dataKeluarga', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambahData()
	{
		$data['title'] = "Tambah Data Keluarga";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/formTambahKeluarga', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambahDataAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambahData();
		} else {
			$no_kk						= $this->input->post('no_kk');
			$kepala					    = $this->input->post('kepala');
			$desa						= $this->input->post('desa');
			$rt						    = $this->input->post('rt');
			$rw						    = $this->input->post('rw');
			$kec			            = $this->input->post('kec');
			$kab		                = $this->input->post('kab');
			$prov					    = $this->input->post('prov');
		}

		$data = array(
			'no_kk'					=> $no_kk,
			'kepala'				=> $kepala,
			'desa'				    => $desa,
			'rt'				    => $rt,
			'rw'				    => $rw,
			'kec'				    => $kec,
			'kab'		            => $kab,
			'prov'				    => $prov,

		);

		$this->pendudukModel->insert_data($data, '
				tb_kk');
		$this->session->set_flashdata('pesan', '<div 
				class="alert alert-success alert-dismissible 
				fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" 
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
		redirect('admin/dataKeluarga');
	}

	public function updateData($id)
	{
		$where = array('id_kk' => $id);
		$data['title'] = 'Update Data Keluarga';
		$data['keluarga'] = $this->pendudukModel->get_data('tb_kk')->result();
		$data['keluarga'] = $this->db->query("SELECT * FROM tb_kk WHERE id_kk='$id'")->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/formUpdateKeluarga', $data);
		$this->load->view('templates_admin/footer');
	}
	public function updateDataAksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->updateData();
		} else {
			$id      					= $this->input->post('id_kk');
			$no_kk						= $this->input->post('no_kk');
			$kepala					    = $this->input->post('kepala');
			$desa						= $this->input->post('desa');
			$rt						    = $this->input->post('rt');
			$rw						    = $this->input->post('rw');
			$kec			            = $this->input->post('kec');
			$kab		                = $this->input->post('kab');
			$prov					    = $this->input->post('prov');
		}

		$data = array(
			'no_kk'					=> $no_kk,
			'kepala'				=> $kepala,
			'desa'				    => $desa,
			'rt'				    => $rt,
			'rw'				    => $rw,
			'kec'				    => $kec,
			'kab'		            => $kab,
			'prov'				    => $prov,
		);

		$where = array(
			'id_kk' => $id
		);

		$this->pendudukModel->update_data('tb_kk', $data, $where);
		$this->session->set_flashdata('pesan', '<div 
				class="alert alert-success alert-dismissible 
				fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" 
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
		redirect('admin/dataKeluarga');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('no_kk', 'Nomor Kartu Keluarga', 'required');
		$this->form_validation->set_rules('kepala', 'Kepala Keluarga', 'required');
		$this->form_validation->set_rules('desa', 'Desa', 'required');
		$this->form_validation->set_rules('rt', 'RT', 'required');
		$this->form_validation->set_rules('rw', 'RW', 'required');
		$this->form_validation->set_rules('kec', 'Kecamatan', 'required');
		$this->form_validation->set_rules('kab', 'Kabupaten', 'required');
		$this->form_validation->set_rules('prov', 'Provinsi', 'required');
	}

	public function deleteData($id)
	{
		$where = array('id_kk' => $id);
		$this->pendudukModel->delete_data($where, 'tb_kk');
		$this->session->set_flashdata('pesan', '<div 
				class="alert alert-danger alert-dismissible 
				fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" 
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
		redirect('admin/dataKeluarga');
	}
}
