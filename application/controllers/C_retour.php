<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_retour extends CI_Controller {

	
	public function index()
	{
		$this->load->view('v_retour');
	}
}
