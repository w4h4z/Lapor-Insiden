<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['main_view'] = 'v_beranda';
		$this->load->view('template', $data);
	}

	public function lapor()
	{
		$data['main_view'] = 'v_lapor';
		$this->load->view('template', $data);
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */