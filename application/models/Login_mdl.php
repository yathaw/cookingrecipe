<?php
class Login_mdl extends CI_Model
{
	
	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('users_email',$email);
		$this->db->where('users_password', SHA1($password));
		$sql = $this->db->get();

		return $sql->row_array();
	}
}

?>