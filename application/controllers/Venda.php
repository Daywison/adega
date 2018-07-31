<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venda extends CI_Controller {	
	public function index()
	{
		$dados["nome_view"]="venda";
		$this->load->view('template' , $dados);
	}

	public function novaVenda() {
		$this->load->model("M_Venda");
		$id_venda = $this->M_Venda->novaVenda();
		echo $id_venda;
	}
}
