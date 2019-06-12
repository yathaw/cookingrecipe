<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function hello()
	{
		$data["name"] = "Ya Thaw Myat Noe";
		$data["dob"] = "5. 11. 1997";
		$data["address"] = "Yangon";
		$data["color"] = "red";

		$this->load->view('hello',$data);
	}

	public function gethello($name, $dob, $address, $color)
	{
		// index.php/Welcome/gethello/mgmg/11.1.199/madalay/green
		
		$data['name'] = $name;
		$data['dob'] = $dob;
		$data['address'] = $address;
		$data['color'] = $color;

		$this->load->view('hello',$data);	
	}

	public function template()
	{
		// index.php/Welcome/template
		$this->load->view('backendtemplate');
	}


}


