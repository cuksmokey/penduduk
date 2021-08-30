<?php

class Dashboard Extends CI_Controller{
	public function index()
	{
		$data['title'] = "Dashboard";
		$penduduk = $this->db->query("SELECT * FROM data_penduduk");
		$data['penduduk']=$penduduk->num_rows();
		$keluarga = $this->db->query("SELECT * FROM tb_kk");
		$data['keluarga']=$keluarga->num_rows();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templates_admin/footer');
	}
}

?>