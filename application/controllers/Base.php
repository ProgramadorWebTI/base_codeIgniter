<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
	
	public function index()
	{
		$data = array(
			'title' => 'Panel administrativo'
		);
		$this->load->view('template/inicio', $data);
		$this->load->view('home/index');
		$this->load->view('template/final');
	}
}
