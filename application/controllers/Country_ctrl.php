<?php
class Country_ctrl extends CI_Controller
{
	public function index()
	{
		$data['countries'] = $this->Country_mdl->list();

		$data['innerdata'] = 'country_read';
		$this->load->view('backendtemplate',$data);
	}

	public function create()
	{
		$data['innerdata'] = 'country_create';
		$this->load->view('backendtemplate',$data);
	}

	public function store()
	{
		// Validation
		$this->form_validation->set_rules('name', 'Country Name', 'trim|required|min_length[2]|is_unique[countries.countries_name]');

		if($this->form_validation->run() == FALSE) 
		{
			$data['innerdata'] = 'country_create';
			$this->load->view('backendtemplate',$data);	
		}

		else
		{
			$this->Country_mdl->store();

			redirect('country');
		}


	}

















}

?>