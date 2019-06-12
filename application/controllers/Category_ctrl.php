<?php
class Category_ctrl extends CI_Controller
{
	public function index()
	{
		$data['categories'] = $this->Category_mdl->list();

		$data['innerdata'] = 'category_read';
		$this->load->view('backendtemplate',$data);
	}

	public function create()
	{
		$data['innerdata'] = 'category_create';
		$this->load->view('backendtemplate',$data);
	}

	public function store()
	{
		// Validation
		$this->form_validation->set_rules('name', 'Categroy Name', 'trim|required|min_length[2]|is_unique[categories.categories_name]');

		if($this->form_validation->run() == FALSE) 
		{
			$data['innerdata'] = 'category_create';
			$this->load->view('backendtemplate',$data);	
		}

		else
		{
			$this->Category_mdl->store();

			$this->session->set_flashdata('success', 'New Category is <b> added </b> in your data.');
			redirect('category');
		}
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data['category'] = $this->Category_mdl->detail($id);

		$data['innerdata'] = 'category_detail';
		$this->load->view('backendtemplate',$data);
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Category_mdl->delete($id);

		$this->session->set_flashdata('success', 'Existing Category is <b> deleted </b> in your data.');

		redirect('category');
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['category'] = $this->Category_mdl->detail($id);

		$data['innerdata'] = 'category_edit';
		$this->load->vieW('backendtemplate',$data);
	}

	public function update()
	{
		$this->Category_mdl->update();

		$this->session->set_flashdata('success', 'Existing Category is <b> updated </b> in your data.');

		redirect('category');
	}















}

?>