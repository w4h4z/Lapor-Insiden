<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['main_view'] = 'admin/v_chart';
		$this->load->view('admin/template',$data);
	}

	public function klarifikasi()
	{
		$data['main_view'] = 'admin/v_laporan';
		$this->load->view('admin/template',$data);
	}

	public function feedback() {
		$data['main_view'] = 'admin/v_laporan';
		$this->load->view('admin/template',$data);
	}

	public function analisis() {
		$data['main_view'] = 'admin/v_laporan';
		$this->load->view('admin/template',$data);
	}

	public function tembusan() {
		$data['main_view'] = 'admin/v_laporan';
		$this->load->view('admin/template',$data);
	}

	public function login()
	{
		$this->load->view('admin/v_login');
	}

	public function auth() {
		// authentication
	}

	public function logout() {
		
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */