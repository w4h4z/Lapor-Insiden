<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function login()
	{
		$data = $this->db->select('id_admin1,nama_admin1,username_admin1,password_admin1')
						 ->where('username_admin1', $this->input->post('username'))
						 ->where('password_admin1', sha1($this->input->post('password')))
						 ->get('admin_1');

		if ($this->db->affected_rows() > 0) {
			$a = $data->row();

			$array = array(
				'id_admin'		  => $a->id_admin1,
				'nama_admin' 	  => $a->nama_admin1,
				'username_admin' => $a->username_admin1,
				'password_admin' => $a->password_admin1,
				'admin'			  => '1',
				'login'		 	 => true,
				'klasifikasi'	 => 'admin'
			);
			
			$this->session->set_userdata( $array );

			return true;
		} else {
			$data = $this->db->select('id_admin2,nama_admin2,username_admin2,password_admin2,tipe')
						 ->where('username_admin2', $this->input->post('username'))
						 ->where('password_admin2', sha1($this->input->post('password')))
						 ->get('admin_2');

			if ($this->db->affected_rows() > 0) {
				$a = $data->row();

				$array = array(
					'id_admin'		  => $a->id_admin2,
					'nama_admin' 	  => $a->nama_admin2,
					'username_admin' => $a->username_admin2,
					'password_admin' => $a->password_admin2,
					'admin'			  => '2',
					'tipe'			  => $a->tipe,
					'login'		 	 => true,
					'klasifikasi'	 => 'admin'
				);

				$this->session->set_userdata( $array );

				return true;
			} else {
				return false;
			}
		}
	}

	public function uploadFile($file)
	{
		$admin = 'admin_1';
		if ($this->session->userdata('tipe') != null) {
			$admin = 'admin_2';
		}
		
		$object = array('id_aduan' => $this->session->userdata('id_aduan'), 
						$admin	=> $this->session->userdata('id_admin'),
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

	public function verifLaporan($id)
	{
		$data = array('status_verif' => 1, 'jenis_klasifikasi' => $this->input->post('jenis'));

		$this->db->where('id_aduan', $id)->update('aduan_siber', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function detailAduan($ticket)
	{
		return $this->db->where('ticket', $ticket)->join('pelapor', 'pelapor.id_pelapor=aduan_siber.id_pelapor')->get('aduan_siber')->row();
	}

	public function chat()
	{
		$status = 0;
		$admin1 = '';
		$admin2 = $this->session->userdata('id_admin');

		if ($this->session->userdata('admin') == 1) {
			$status = 1;
			$admin1 = $this->session->userdata('id_admin');
			$admin2 = '';
		}

		$object = array(
			'id_aduan' => $this->session->userdata('id_aduan'),
			'id_admin1' => $admin1,
			'id_admin2' => $admin2,
			'chat' 	   => $this->input->post('chat'),
			'status'   => $status
		);

		$this->db->insert('chat', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
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

	public function tampilChat($id)
	{
		$object = array('status' => 1);

		$this->db->where('id', $id)->update('chat', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteChat($id)
	{
		$this->db->where('id', $id)->delete('chat');

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function updateStatusAduan($id, $a)
	{
		$object = array('status' => $a);
		$this->db->where('id_aduan', $id)->update('aduan_siber', $object);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */