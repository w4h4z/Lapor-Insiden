<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapor extends CI_Model {
	
	public function login()
	{
		$query = $this->db->select('email,password,nama_pelapor,no_telp,no_id')
				 ->where('email', $this->input->post('emailMasuk'))
				 ->where('password', sha1($this->input->post('passwordMasuk')))
				 ->get('pelapor');

		if ($this->db->affected_rows() > 0) {
			$data = $query->row();

			$session = array('nama_pelapor' => $data->nama_pelapor,
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

}

/* End of file m_lapor.php */
/* Location: ./application/models/m_lapor.php */