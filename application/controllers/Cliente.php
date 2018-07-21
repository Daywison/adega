<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {	
	public function index()
	{
		$dados["nome_view"]="lista-cliente";
		$this->load->view('template' , $dados);
	}
}
