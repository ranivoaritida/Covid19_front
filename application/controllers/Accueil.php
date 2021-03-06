<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require("Base_Controller.php");
class Accueil extends Base_Controller {
	public function index() 
	{
		$data=array();
		$this->load->model('Accueil_model');
		$data['titre'] = $this->Accueil_model->get_page_name();
		$data['contenue'] = $this->Accueil_model->get_page_content();
		$this->load->view('Home', $data);

	}
	public function mada($id) 
	{
		$data=array();
		$this->load->model('Madagascar_model');
		$data['contenue'] = $this->Madagascar_model->get_info($id);
		$this->load->view('Madagascar', $data);

	}
	public function monde($id) 
	{
		$data=array();
		$this->load->model('Madagascar_model');
		$data['contenue'] = $this->Madagascar_model->get_info($id);
		$this->load->view('Monde', $data);

	}
}
