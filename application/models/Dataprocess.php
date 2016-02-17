<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataprocess extends CI_Model {

	function getContents($table,$id){
		$data = $this->db->get_where($table,array('id'=>$id));
		return $data->result_array();
	}

	function getArticles($table){
		if ($table == 'content'){
			$this->db->where('kategori','Tips');
			$this->db->or_where('kategori','Artikel');	
		}
		$this->db->order_by('id','desc');
		$data = $this->db->get($table);
		return $data->result_array();
	}

	function goLogin($user,$pass){
		$data = $this->db->get_where('users',array('username'=>$user,'password'=>$pass));
		return $data->row_array();
	}

	function savePesan($pesan){
		$this->db->insert('pesan',$pesan);
	}

	function saveVisitor($tanggal,$ipaddress,$counter,$ref){
		$this->db->insert('visitor',array('tanggal'=>$tanggal,'ip_address'=>$ipaddress,'counter'=>$counter,'referer'=>$ref));
	}

	function getSumCounter(){
		$this->db->select_sum('counter');
		$this->db->from('visitor');
		$data = $this->db->get();
		return $data->row()->counter;
	} 

	function getVisitor(){
		$data = $this->db->get('visitor');
		return $data->result_array();
	}

}