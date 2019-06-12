<?php

class Country_mdl extends CI_Model
{
	public function list()
	{
		$this->db->select('*');
		$this->db->from('countries');
		$sql = $this->db->get();

		return $sql->result();
	}

	public function store()
	{
		$name = $this->input->post('name');
		$photo = $this->Country_mdl->upload_img('photo');

		$data = array(
			'countries_name'	=>	$name,
			'countries_photo'	=>	$photo['data'],
		);
		$result = $this->db->insert('countries',$data);

		return $result;
	}


	public function upload_img($image)
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/country/'.$file;
		
		$config['upload_path']='image/country/'; 
		$config['allowed_types']= 'gif|jpg|jpeg|png';

		$this->load->library('upload',$config);
		if ($this->upload->do_upload($image)) 
		{
			$userfile = array( 
				'state' => 1,
				'data' => $filepath );
		}
		else 
		{
			$userfile = array(
				'state' => 0,
				'data' => $this->upload->display_errors());
		}

		return $userfile;
	}






}
?>