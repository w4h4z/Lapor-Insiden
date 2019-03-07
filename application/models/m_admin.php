<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function login()
	{
		$data = $this->db->select('nama_admin1,username_admin1,password_admin1')
						 ->where('username_admin1', $this->input->post('username'))
						 ->where('password_admin1', sha1($this->input->post('password')))
						 ->get('admin_1');

		if ($this->db->affected_rows() > 0) {
			$a = $data->row();

			$array = array(
				'nama_admin1' 	  => $a->nama_admin1,
				'username_admin1' => $a->username_admin1,
				'password_admin1' => $a->password_admin1 
			);
			
			$this->session->set_userdata( $array );

			return true;
		} else {
			$data = $this->db->select('nama_admin2,username_admin2,password_admin2')
						 ->where('username_admin2', $this->input->post('username'))
						 ->where('password_admin2', sha1($this->input->post('password')))
						 ->get('admin_2');

			if ($this->db->affected_rows() > 0) {
				$a = $data->row();

				$array = array(
					'nama_admin2' 	  => $a->nama_admin2,
					'username_admin2' => $a->username_admin2,
					'password_admin2' => $a->password_admin2 
				);

				return true;
			} else {
				return false;
			}
		}
	}

}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */