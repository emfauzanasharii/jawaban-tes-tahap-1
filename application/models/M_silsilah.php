<?php 
/**
 * 
 */
class M_silsilah extends CI_Model {

	function get_all(){
		$hsl=$this->db->query("SELECT cucu.id as id, cucu.nama as nama, cucu.jenis_kelamin as jenis_kelamin, cucu.status as status,
		 anak.nama as ortu_nama  
		 FROM tbl_keluarga as cucu left join tbl_keluarga as anak on cucu.ortu_id=anak.id");
		return $hsl;
	}
	
	// function get_all(){
	// 	$hsl=$this->db->query("SELECT * FROM tbl_keluarga");
	// 	return $hsl;
	// }

	function get_anak(){
		$hsl=$this->db->query("SELECT * FROM tbl_keluarga where status=1");
		return $hsl;
	}

	function get_cucu(){
		$hsl=$this->db->query("SELECT * FROM tbl_keluarga WHERE status=2");
		return $hsl;
	}

	function get_cucu_perempuan(){
		$hsl=$this->db->query("SELECT * FROM tbl_keluarga WHERE status=2 and jenis_kelamin=2");
		return $hsl;
	}

	function get_bibi_farah(){
		$hsl=$this->db->query("SELECT nama, jenis_kelamin from tbl_keluarga where status=1 and jenis_kelamin=2");
		return $hsl;
	}

	function get_sepupu_laki(){
		$hsl=$this->db->query("SELECT nama, jenis_kelamin from tbl_keluarga where status=2 and jenis_kelamin=1");
		return $hsl;
	}

	function simpan($data){
		$hsl=$this->db->insert('tbl_keluarga', $data);
		return $hsl;
	}

	function hapus($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}