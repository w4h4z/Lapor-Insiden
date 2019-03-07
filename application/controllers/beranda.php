<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lapor');
	}

	public function index()
	{
		$this->load->view('v_beranda');
	}

	public function lapor()
	{
		$data['main_view'] = 'v_lapor';
		$this->load->view('template', $data);
	}

	public function login()
	{
		if ($this->m_lapor->login()) {
			redirect('beranda/lapor');
		} else {
			echo 'gagal';
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('beranda');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */