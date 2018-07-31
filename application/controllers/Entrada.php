<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrada extends CI_Controller {	
	public function index()
	{
		$this->load->model("M_Entrada");
		$dados["lista"] = $this->M_Entrada->listarEntradasAtuais()->result();		
		$dados["nome_view"]="entrada";
		$this->load->view('template' , $dados);
	}

	public function inserir() {
		$this->load->model("M_Entrada");
		$this->M_Entrada->inserir();
	}

	 public function listarEntradasAtuais() {
       $this->load->model("M_Entrada");
	   $consulta = $this->M_Entrada->listarEntradasAtuais()->result();
	   echo json_encode($consulta);
    }
}
