<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {	
	public function index()
	{
		$dados["nome_view"]="home";
		$this->load->view('template' , $dados);
	}
}
