<?php
class Ingredient_ctrl extends CI_Controller
{
	public function index()
	{
		$data['ingredients'] = $this->Ingredient_mdl->list();

		$data['innerdata'] = 'ingredient_read';
		$this->load->view('backendtemplate',$data);
	}

	public function create()
	{
		$data['innerdata'] = 'ingredient_create';
		$this->load->view('backendtemplate',$data);
	}

	public function store()
	{
		// Validation
		$this->form_validation->set_rules('name', 'Ingredient Name', 'trim|required|min_length[2]|is_unique[ingredients.ingredients_name]');

		if($this->form_validation->run() == FALSE) 
		{
			$data['innerdata'] = 'ingredient_create';
			$this->load->view('backendtemplate',$data);	
		}

		else
		{
			$this->Ingredient_mdl->store();

			redirect('ingredient');
		}


	}

















}

?>