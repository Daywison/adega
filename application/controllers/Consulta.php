<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {	
	public function venda()
	{
		$this->load->model("M_Venda");
		$dados["lista"] = $this->M_Venda->consultaVenda()->result();
		$dados["nome_view"]="consultaVenda";
		$this->load->view('template' , $dados);
	}

	
}
