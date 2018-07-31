<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {	
	public function index()	{
		$this->listarCliente();
	}

	public function listarCliente() {
		$this->load->model('M_Cliente');
		$dados["lista"] = $this->M_Cliente->listarCliente()->result();

		$dados["nome_view"]="lista-cliente";
		$this->load->view('template' , $dados);
	}

	public function editar($id) {
		$this->load->model('M_Cliente');
		$dados["cliente"] = $this->M_Cliente->getCliente($id)->row();
		$dados["nome_view"]="form-cliente";
		$this->load->view('template' , $dados);
	}

	public function excluir($id) {
		$this->load->model('M_Cliente');
		$this->M_Cliente->excluir($id);
		redirect(base_url("cliente"));
	}

	public function buscaCliente_json() {
		$this->load->model('M_Cliente');
		$consulta = $this->M_Cliente->buscaCliente()->result();
		echo json_encode($consulta);
	}

	public function novo() {
		$dados["nome_view"] = "form-cliente";
		$this->load->view('template', $dados);
	}

	public function salvar() {
		$this->load->model('M_Cliente');
		$query = $this->M_Cliente->salvar();
		redirect(base_url("cliente"));
	}
}
