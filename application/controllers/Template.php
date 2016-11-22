<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Testing',
			'header' => $this->load->view('headers/header'),
			'section_1' => ''
		);
		$this->load->view('template', $data);
	}
}
