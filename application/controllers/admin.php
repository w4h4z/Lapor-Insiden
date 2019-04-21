<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_lapor');
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		if ($this->session->userdata('login') == true) {
			if ($this->session->userdata('klasifikasi') == 'admin') {
				redirect('admin/chart');	
			} else {
				redirect('beranda/lapor');
			}
		} else {
			redirect('admin/login');
		}
	}

	public function chart()
	{
		if ($this->session->userdata('login') == true) {
			if ($this->session->userdata('klasifikasi') == 'admin') {
				$data['main_view'] = 'admin/v_chart';
				$this->load->view('admin/template',$data);
				$this->output->enable_profiler(TRUE);	
			} else {
				redirect('beranda/lapor');
			}
		} else {
			redirect('admin/login');
		}
	}

	public function laporan()
	{
		if ($this->session->userdata('login') == true) {
			if ($this->session->userdata('klasifikasi') == 'admin') {
				$data['main_view'] = 'admin/v_laporan';
				$data['laporan'] = $this->m_lapor->getHistory1();
				$this->load->view('admin/template',$data);	
			} else {
				redirect('beranda/lapor');
			}
		} else {
			redirect('admin/login');
		}

	}

	public function progress()
	{
		if ($this->session->userdata('login') == true) {
			if ($this->session->userdata('klasifikasi') == 'admin') {
				$data['main_view'] = 'admin/v_progress';
				$data['laporan'] = $this->m_lapor->getHistoryVerif();
				$this->load->view('admin/template',$data);	
			} else {
				redirect('beranda/lapor');
			}
		} else {
			redirect('admin/login');
		}
	}

	public function login()
	{
		if ($this->session->userdata('login') == true) {
			if ($this->session->userdata('klasifikasi') == 'admin') {
				redirect('admin');
			} else {
				redirect('beranda/lapor');
			}
		} else {
			$this->load->view('admin/v_login');	
		}
	}

	public function auth() {
		if ($this->m_admin->login()) {
			redirect('admin');
		} else {
			$this->session->set_flashdata('failed', 'failed');
			redirect('admin/login');
		}
	}

	public function logout() {
		$this->session->sess_destroy();

		redirect('admin/login');
	}

	public function verif_lapor($id)
	{
		if ($this->m_admin->verifLaporan($id)) {
			redirect('admin/laporan');
		} else {
			redirect('admin/laporan');
		}
	}

	public function updateStatusAduan($id, $z)
	{
		$a = array('r' => true);
		if ($this->m_admin->updateStatusAduan($id, $z)) {
			echo json_encode($a);
		} else {
			$a['r'] = 'false';
			echo json_encode($a);
		}
	}

	public function lapor($ticket,$id)
	{
		$array = array(
			'ticket' => $ticket,
			'id_aduan' => $id
		);
		
		if ($this->session->userdata('login') == true) {
			if ($this->session->userdata('klasifikasi') == 'admin') {
				$this->session->set_userdata( $array );
				$data['main_view'] = 'admin/v_tangani_laporan';
				$data['aduan'] = $this->m_admin->detailAduan($ticket);
				$data['chat'] = $this->m_admin->getChat();
				$this->load->view('admin/template', $data);	

				$this->output->enable_profiler(TRUE);
			} else {
				redirect('beranda/lapor');
			}
		} else {
			redirect('admin/login');
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
			if ($this->m_admin->uploadFile($this->upload->data())) {
				redirect($this->session->userdata('url'));
			} else {
				redirect($this->session->userdata('url'));
			}
		}
	}

	public function chat()
	{
		if ($this->m_admin->chat()) {
			redirect('admin/lapor/'.$this->session->userdata('ticket').'/'.$this->session->userdata('id_aduan').'');
		} else {
			redirect('admin/lapor/'.$this->session->userdata('ticket').'/'.$this->session->userdata('id_aduan').'');
		}
	}

	public function tampilChat($id)
	{
		if ($this->m_admin->tampilChat($id)) {
			redirect('admin/lapor/'.$this->session->userdata('ticket').'/'.$this->session->userdata('id_aduan').'');
		} else {
			redirect('admin/lapor/'.$this->session->userdata('ticket').'/'.$this->session->userdata('id_aduan').'');
		}
	}

	public function deleteChat($id)
	{
		if ($this->m_admin->deleteChat($id)) {
			redirect('admin/lapor/'.$this->session->userdata('ticket').'/'.$this->session->userdata('id_aduan').'');
		} else {
			redirect('admin/lapor/'.$this->session->userdata('ticket').'/'.$this->session->userdata('id_aduan').'');
		}
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */