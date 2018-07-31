<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itens extends CI_Controller {	
	public function index()
	{
		$this->load->model("M_Itens");
		$dados["lista"] = $this->M_Itens->listarItensAtuais()->result();		
		$dados["nome_view"]="itens";
		$this->load->view('template' , $dados);
	}

	public function inserir() {
		$this->load->model("M_Itens");
		$this->M_Itens->inserir();
		$consulta = $this->M_Itens->listarItens()->result();
		echo json_encode($consulta);
	}

	public function excluir() {
		$id_venda = $this->input->post("id_venda");		
		$this->load->model("M_Itens");
		$this->M_Itens->excluir();
		$consulta = $this->M_Itens->listarItens($id_venda)->result();
		echo json_encode($consulta);
	}

}
