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

	public function cancelaVenda() {
		$this->load->model("M_Venda");
		$this->M_Venda->cancelaVenda();
		
	}

	public function finalizarVenda() {
		$this->load->model("M_Venda");
		$id_venda = $this->input->post("id_venda");
		$this->M_Venda->finalizarVenda();
		//redirect (base_url("venda/detalhes/$id_venda"));
	}

	public function detalhes($id_venda) {
		$this->load->model("M_Venda");
		$dados["venda"] = $this->M_Venda->getVenda($id_venda)->row();
		$dados["nome_view"]="detalhesVenda";
		$this->load->view('template' , $dados);
	}
}
