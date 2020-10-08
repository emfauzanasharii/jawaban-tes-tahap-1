<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class silsilah extends CI_Controller {
		function __construct(){
		parent::__construct();
		
		$this->load->model('m_silsilah');
		$this->load->library('upload');
	}
	public function index(){
		$x['data']=$this->m_silsilah->get_all();
		$x['ortu']=$this->m_silsilah->get_anak();
		// print_r($x);
		// die();
		$this->load->view('v_crud',$x);
	}

	public function tugas()
	{

//anak pak budi
		$x['data']=$this->m_silsilah->get_anak();
//cucu pak budi
		$x['cucu']=$this->m_silsilah->get_cucu();
//cucu perempuan pak budi
		$x['cucupr']=$this->m_silsilah->get_cucu_perempuan();
//bibi vfarah
		$x['bibi']=$this->m_silsilah->get_bibi_farah();
//sepupu laki-laki Hani
		$x['sepupu']=$this->m_silsilah->get_sepupu_laki();
// load data ke view
		$this->load->view('v_silsilah', $x);

	}

	public function simpan(){
			$nama=$this->input->post('nama');
			$jengkel=$this->input->post('jengkel');
			$status=$this->input->post('status');
			$ortu=$this->input->post('ortu');
		$data=array(
			'nama'=>$nama,
			'jenis_kelamin'=>$jengkel,
			'status'=>$status,
			'ortu_id'=>$ortu

		);

	$this->m_silsilah->simpan($data);
	redirect('silsilah');
	               				
}
	public function hapus($id){
		$where=array('id'=>$id);
		$this->m_silsilah->hapus($where, 'tbl_keluarga');
		redirect('silsilah');
		// print_r($id);
		// die();
	}

	public function edit($id){
		$where = array('id' => $id);
		$x['data'] = $this->m_silsilah->edit($where,'tbl_keluarga')->result();
		$x['ortu']=$this->m_silsilah->get_anak();
		$this->load->view('v_edit',$x);
	}

	public function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$jengkel = $this->input->post('jengkel');
	$status = $this->input->post('status');
 
	$data = array(
		'nama' => $nama,
		'jenis_kelamin' => $jengkel,
		'status' => $status
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_silsilah->update($where,$data,'tbl_keluarga');
	redirect('silsilah');
}

}
