<?php

class Home extends CI_Controller{

	function index(){
		$this->load->model('m_artikel');

		$data['artikel'] = $this->m_artikel->readAll();

		$this->load->view('home',$data);
	}

}