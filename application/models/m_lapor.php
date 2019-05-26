<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapor extends CI_Model {
	
	public function login()
	{
		$query = $this->db->select('id_pelapor,email,password,nama_pelapor,no_telp,no_id,status')
				 ->where('email', $this->input->post('emailMasuk'))
				 ->where('password', sha1($this->input->post('passwordMasuk')))
				 ->get('pelapor');

		if ($this->db->affected_rows() > 0) {
			$data = $query->row();

			if ($data->status == 0) {
				return false;
			}

			$session = array('id_pelapor'	=> $data->id_pelapor,
							 'nama_pelapor' => $data->nama_pelapor,
							 'no_telp' 		=> $data->no_telp,
							 'email'		=> $data->email,
							 'password'		=> $data->password,
							 'no_id'		=> $data->no_id,
							 'login'		=> true,
							 'klasifikasi'	=> 'user',
							 'status'		=> $data->status
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
					  'no_id'		 => $this->input->post('regId'),
					  'nama_org'	 => $this->input->post('namaOrg'),
					  'alamat_org'	 => $this->input->post('alamatOrg')
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
		return $this->db->select('id_aduan,ticket,waktu_laporan,jenis_klasifikasi,status_verif,status')->where('id_pelapor',$this->session->userdata('id_pelapor'))->get('aduan_siber')->result();
	}

	public function getHistory1()
	{
		return $this->db->select('*')->where('status_verif', 0)->get('aduan_siber')->result();
	}

	public function getHistoryVerif()
	{
		return $this->db->select('*')
						->join('balas_aduan','balas_aduan.id_aduan=aduan_siber.id_aduan')
						->where('status_verif', 1)
						->get('aduan_siber')
						->result();
	}

	public function getHistoryVerif1()
	{
		return $this->db->select('*')
						->where('status_verif', 1)
						->get('aduan_siber')
						->result();
	}

	public function getChat()
	{
		return $this->db->join('pelapor','pelapor.id_pelapor=chat.pelapor', 'left')
						->join('admin_1','admin_1.id_admin1=chat.id_admin1', 'left')
						->join('admin_2','admin_2.id_admin2=chat.id_admin2', 'left')
						->where('id_aduan', $this->uri->segment(4))
						->get('chat')
						->result();
	}


	public function sendChat()
	{
		$status = 1;
		$admin1 = '';
		$admin2 = '0';

		$object = array(
			'id_aduan' => $this->session->userdata('id_aduan'),
			'id_admin1' => $admin1,
			'id_admin2' => $admin2,
			'chat' 	   => $this->input->post('chat'),
			'status'   => $status,
			'pelapor'	=>  $this->session->userdata('id_pelapor')
		);

		$this->db->insert('chat', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function uploadFile($file)
	{
		$object = array('id_aduan' => $this->session->userdata('id_aduan'), 
						'pelapor'	=> $this->session->userdata('id_pelapor'),
						'file'		=> $file['file_name'],
						'status'	=> 1
					);

		$this->db->insert('chat', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function aktivasiAkun($id)
	{
		$object = array('status' => 1 );
		$this->db->where('id_pelapor', $id)->update('pelapor', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

}

/* End of file m_lapor.php */
/* Location: ./application/models/m_lapor.php */