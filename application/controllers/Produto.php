<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {	
	public function index()	{
		$this->listarProduto();
	}

	public function listarProduto() {
		$this->load->model('M_Produto');
		$dados["lista"] = $this->M_Produto->listarProduto()->result();

		$dados["nome_view"]="lista-produto";
		$this->load->view('template' , $dados);
	}

	public function editar($id) {
		$this->load->model('M_Produto');
		$dados["produto"] = $this->M_Produto->getProduto($id)->row();
		$dados["nome_view"]="form-produto";
		$this->load->view('template' , $dados);
	}

	public function excluir($id) {
		$this->load->model('M_Produto');
		$this->M_Produto->excluir($id);
		redirect(base_url("produto"));
	}

	public function novo() {
		$dados["nome_view"] = "form-produto";
		$this->load->view('template', $dados);
	}

	public function salvar() {
		$this->load->model('M_Produto');
		$query = $this->M_Produto->salvar();
		redirect(base_url("produto"));
	}
}
