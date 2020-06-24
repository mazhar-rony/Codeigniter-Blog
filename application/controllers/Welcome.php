<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$data = array();
		$data['title'] = 'Home';
		$data['maincontent'] = $this->load->view('home', '', true);
		$this->load->view('master', $data);
	}

	public function about()
	{
		$data = array();
		$data['title'] = 'Features';
		$data['hero'] = 'About us';
		$data['search'] = 1;
		$data['maincontent'] = $this->load->view('about', '', true);
		$this->load->view('master', $data);
	}

	public function recipes()
	{
		$data = array();
		$data['title'] = 'Recipes';
		$data['hero'] = 'Recipes';
		$data['search'] = 1;
		$data['maincontent'] = $this->load->view('recipes', '', true);
		$this->load->view('master', $data);
	}

	public function recipe_single()
	{
		$data = array();
		$data['title'] = 'Recipe';
		$data['hero'] = 'Recipe';
		$data['search'] = 1;
		$data['maincontent'] = $this->load->view('recipe-single', '', true);
		$this->load->view('master', $data);
	}

	public function contact()
	{
		$data = array();
		$data['title'] = 'Contact';
		$data['hero'] = 'Contact';
		$data['search'] = 1;
		$data['maincontent'] = $this->load->view('contact', '', true);
		$this->load->view('master', $data);
	}

	// public function login()
	// {
	// 	$this->load->view('admin/login');
	// }
}
