<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section extends CI_Controller {

	public function Section_1()
	{    
		$data = array(
			'title' => 'Section', // judul
			'header' => $this->load->view('headers/header'), // header paling atas
      'section_1'=> $this->load->view('contents/section_1') // section pertama
		);
		$this->load->view('template', $data ); // template
	}
}
