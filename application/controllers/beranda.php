<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lapor');
		$this->load->model('m_admin');
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		if ($this->session->userdata('login') == true) {
			if ($this->session->userdata('klasifikasi') == 'admin') {
				redirect('admin');
			} else {
				redirect('beranda/lapor');
			}
		} else {
			$this->load->view('v_beranda');
		}
	}

	public function lapor()
	{
		$data['main_view'] = 'v_lapor';
		$this->load->view('template', $data);
	}

	public function history()
	{
		$data['main_view'] = 'v_history';
		$data['history'] = $this->m_lapor->getHistory();
		$this->load->view('template', $data);
	}

	public function login()
	{
		if ($this->m_lapor->login()) {
			redirect('beranda/lapor');
		} else {
			$this->session->set_flashdata('failed', 'Login Gagal');
			redirect('beranda');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('beranda');
	}

	public function chat()
	{
		if ($this->m_lapor->sendChat()) {
			redirect($this->session->userdata('url'));
		} else {
			redirect($this->session->userdata('url'));
		}
	}

	public function register()
	{
		if ($this->m_lapor->register()) {
			$this->session->set_flashdata('success', '<b>Pendaftaran Berhasil</b> Silahkan Cek Alamat Email Anda.');
			redirect('beranda');
		} else {
			$this->session->set_flashdata('failed', 'Pendaftaran Gagal');
			redirect('beranda');
		}
	}

	public function uploadFile()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['max_size']  = '100000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('bukti')){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect($this->session->userdata('url'));
		}
		else{
			if ($this->m_lapor->uploadFile($this->upload->data())) {
				redirect($this->session->userdata('url'));
			} else {
				redirect($this->session->userdata('url'));
			}
		}
	}

	public function insertLapor()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|txt|doc|docx|pdf|jpeg';
		$config['max_size']  = '10000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('bukti')){
			$this->session->set_flashdata('failed', $this->upload->display_errors());
			redirect('beranda/lapor');
		}
		else{
			if ($this->m_lapor->lapor($this->upload->data())) {
				$this->session->set_flashdata('success', "Pelaporan Berhasil");
				redirect('beranda/lapor');		
			} else {
				$this->session->set_flashdata('failed', "Pelaporan Gagal");
				redirect('beranda/lapor');
			}
		}
	}

	public function detail($ticket,$id)
	{
		$data['main_view'] = 'v_detail';
		$data['aduan'] = $this->m_admin->detailAduan($ticket);
		$data['chat'] = $this->m_lapor->getChat();
		$array = array(
			'url' => base_url().uri_string(),
			'id_aduan' => $id
		);
		
		$this->session->set_userdata( $array );
		$this->load->view('template', $data);
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */