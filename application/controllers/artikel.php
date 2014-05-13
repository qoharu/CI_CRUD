<?php

class Artikel extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_artikel');
	}

	function post(){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		
		$data = ['judul'=> $judul, 'isi'=> $isi];

		$this->m_artikel->create($data);

		echo "judulnya $judul isinya $isi";
	}

	function read($id){
		$data = $this->m_artikel->read($id);

		$this->load->view('read',$data);
	}

	function edit($id){
		$data = $this->m_artikel->read($id);
		$this->load->view('edit',$data);	
	}

	function editlah($id){
		$post['judul'] = $this->input->post('judul');
		$post['isi'] = $this->input->post('isi');

		$this->m_artikel->update($id,$post);
		redirect('home');
	}

	function delete($id){
		$this->m_artikel->delete($id);
		redirect('home');
	}
}