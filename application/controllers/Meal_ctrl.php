<?php
class Meal_ctrl extends CI_Controller
{
	public function index()
	{
		$data['meals'] = $this->Meal_mdl->list();

		$data['innerdata'] = 'meal_read';
		$this->load->view('backendtemplate',$data);
	}

	public function create()
	{
		$data['categories'] = $this->Category_mdl->list();
		$data['countries'] = $this->Country_mdl->list();
		$data['ingredients'] = $this->Ingredient_mdl->list();

		$data['innerdata'] = 'meal_create';
		$this->load->view('backendtemplate',$data);
	}

	public function store()
	{
		// Validation
		$this->form_validation->set_rules('name', 'Meal Name', 'trim|required|min_length[2]|is_unique[meals.meals_name]');

		if($this->form_validation->run() == FALSE) 
		{
			$data['categories'] = $this->Category_mdl->list();
			$data['countries'] = $this->Country_mdl->list();
			$data['ingredients'] = $this->Ingredient_mdl->list();

			$data['innerdata'] = 'meal_create';
			$this->load->view('backendtemplate',$data);	
		}

		else
		{
			$this->Meal_mdl->store();

			redirect('meal');
		}


	}

















}

?>