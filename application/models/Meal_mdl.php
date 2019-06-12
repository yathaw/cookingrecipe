<?php

class Meal_mdl extends CI_Model
{
	public function list()
	{
		$this->db->select('*');
		$this->db->from('meals');
		$sql = $this->db->get();

		return $sql->result();
	}

	public function store()
	{
		$name = $this->input->post('name');
		$photo = $this->Meal_mdl->upload_img('photo');
		$category = $this->input->post('category');
		$country = $this->input->post('country');
		$link = $this->input->post('link');
		$instruction = $this->input->post('instruction');

		$ingredient = $this->input->post('ingredients');
		$amount = $this->input->post('amount');
		$unit = $this->input->post('unit');


		$meal_ingredients = "" ;

		for ($i=0; $i < count($ingredient) ; $i++) 
		{ 
			$chk_ingredients =$ingredient[$i];
			$chk_amount = $amount[$i];
			$chk_unit = $unit[$i];

			if ($meal_ingredients == "") 
			{
				$meal_ingredients .= $chk_ingredients.' '.$chk_amount.' '.$chk_unit;
			}

			else
			{
				$meal_ingredients .= ','.$chk_ingredients.' '.$chk_amount.' '.$chk_unit;
			}

			
		}
		$meals_data = array(
				'meals_name'			=>	$name,
				'meals_photo'			=>	$photo['data'],
				'meals_youtubelink'		=> 	$link,
				'meals_instruction' 	=> 	$instruction,
				'meals_ingredients'		=>	$meal_ingredients,
				'meals_categoryid'		=>	$category,
				'meals_countryid'		=>	$country
			);
			$result = $this->db->insert('meals',$meals_data);

		return $result;
	}


	public function upload_img($image)
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/meal/'.$file;
		
		$config['upload_path']='image/meal/'; 
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