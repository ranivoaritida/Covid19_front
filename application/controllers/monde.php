<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require("Base_Controller.php");
class monde extends Base_Controller {
	public function index($id) 
	{
		$data=array();
		$this->load->model('Madagascar_model');
		$data['contenue'] = $this->Madagascar_model->get_info($id);
		$this->load->view('Monde', $data);

	}
}
