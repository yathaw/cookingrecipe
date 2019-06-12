<?php

class Category_mdl extends CI_Model
{
	public function list()
	{
		$this->db->select('*');
		$this->db->from('categories');
		$sql = $this->db->get();

		return $sql->result();
	}

	public function store()
	{
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$photo = $this->Category_mdl->upload_img('photo');

		$data = array(
			'categories_name'	=>	$name,
			'categories_photo'	=>	$photo['data'],
			'categories_description'	=> $description
		);
		$result = $this->db->insert('categories',$data);

		return $result;
	}


	public function upload_img($image)
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/category/'.$file;
		
		$config['upload_path']='image/category/'; 
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


	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('categories_id',$id);
		$sql = $this->db->get();

		return $sql->row_array();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM categories WHERE categories_id =".$id;

		return $this->db->query($sql);
	}


	public function update()
	{
		if ($_FILES['newPhoto']['name'] == NULL) 
		{
			#old photo
			$photo['data'] = $this->input->post('oldPhoto');
		}
		else
		{
			#new photo
			$photo = $this->Category_mdl->upload_img('newPhoto');
		}

		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$description = $this->input->post('description');

		$data = array(
			'categories_name'	=>	$name,
			'categories_photo'	=>	$photo['data'],
			'categories_description'	=> $description
		);

		$this->db->where('categories_id',$id);
		$result = $this->db->update('categories',$data);

		return $result;
	}


















}
?>