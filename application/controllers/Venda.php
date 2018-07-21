<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venda extends CI_Controller {	
	public function index()
	{
		$dados["nome_view"]="venda";
		$this->load->view('template' , $dados);
	}
}
