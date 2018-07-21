<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saida extends CI_Controller {	
	public function index()
	{
		$dados["nome_view"]="saida";
		$this->load->view('template' , $dados);
	}
}
