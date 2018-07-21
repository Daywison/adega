<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrada extends CI_Controller {	
	public function index()
	{
		$dados["nome_view"]="entrada";
		$this->load->view('template' , $dados);
	}
}
