<?php

class M_artikel extends CI_Model{

	function create($data){
		$this->db->insert('berita',$data);
	}

	function read($id){
		$query = $this->db->query("SELECT * FROM berita where id='$id' ");
	    foreach($query->result_array() as $row);
		return $row;
	}

	function readAll(){
		$hasil = $this->db->get('berita');
		return $hasil->result();
	}

	function update($id,$data){
		$judul = $data['judul'];
		$isi = $data['isi'];

		$this->db->query("UPDATE berita SET judul='$judul', isi='$isi' WHERE id='$id' ");
	}

	function delete($id){
		$this->db->query("DELETE FROM berita where id='$id' ");
	}


}