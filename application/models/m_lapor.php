<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapor extends CI_Model {
	
	public function login()
	{
		$query = $this->db->select('id_pelapor,email,password,nama_pelapor,no_telp,no_id')
				 ->where('email', $this->input->post('emailMasuk'))
				 ->where('password', sha1($this->input->post('passwordMasuk')))
				 ->get('pelapor');

		if ($this->db->affected_rows() > 0) {
			$data = $query->row();

			$session = array('id_pelapor'	=> $data->id_pelapor,
							 'nama_pelapor' => $data->nama_pelapor,
							 'no_telp' 		=> $data->no_telp,
							 'email'		=> $data->email,
							 'password'		=> $data->password,
							 'no_id'		=> $data->no_id,
							 'login'		=> true
						);

			$this->session->set_userdata( $session );

			return true;
		} else {
			return false;
		}
	}

	public function register()
	{
		$data = array('nama_pelapor' => $this->input->post('regNama'),
					  'no_telp'		 => $this->input->post('regTelp'),
					  'email'		 => $this->input->post('regEmail'),
					  'password'	 => sha1($this->input->post('regPass')),
					  'no_id'		 => $this->input->post('regId')
					);

		$this->db->insert('pelapor', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function lapor($files)
	{
		$ticket = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5);

		$data = array('waktu_kejadian' => $this->input->post('waktu_kejadian'), 
					  'deskripsi_umum' => $this->input->post('desc_umum'),
					  'nama_ket_aset'  => $this->input->post('nama_aset'),
					  'lokasi_aset'	   => $this->input->post('lokasi'),
					  'identitas_pemilik_aset'	=> $this->input->post('id_pemilik'),
					  'bukti'		   => $files['file_name'],
					  'jenis_klasifikasi' => $this->input->post('jenis'),
					  'ticket'		   => $ticket,
					  'id_pelapor'	   => $this->session->userdata('id_pelapor')
					);

		$this->db->insert('aduan_siber', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getHistory()
	{
		return $this->db->select('id_aduan,ticket,waktu_laporan,jenis_klasifikasi')->where('id_pelapor',$this->session->userdata('id_pelapor'))->get('aduan_siber')->result();
	}

	public function getHistory1()
	{
		return $this->db->select('id_aduan,ticket,waktu_laporan,jenis_klasifikasi')->where('status_verif', 0)->get('aduan_siber')->result();
	}

	public function getHistoryVerif()
	{
		return $this->db->select('id_aduan,ticket,waktu_laporan,jenis_klasifikasi')->where('status_verif', 1)->get('aduan_siber')->result();
	}

	/*public function sendChat()
	{
		$object = array('' => , );
		$this->db->insert('chat', $object);
	}*/

}

/* End of file m_lapor.php */
/* Location: ./application/models/m_lapor.php */