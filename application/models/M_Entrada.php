<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Entrada extends CI_Model {

    public function listarEntrada() {
        return $this->db->get('entrada');

    }  

    public function listarEntradasAtuais() {
        $data = date("Y-m-d");
        $this->db->join("produto", "produto.id_produto = entrada.id_produto");
        $this->db->where("data_entrada", $data);
        return $this->db->get("entrada");
    }

    public function inserir() {
        $id_produto = $this->input->post("id_produto");
        $data_entrada = date("Y-m-d");
        $hora_entrada = date("H:i:s");
        $motivo_entrada = $this->input->post("motivo");
        $qtde_entrada = $this->input->post("qtde");

        $valores = array(
            "id_produto"        => $id_produto,
            "data_entrada"      => $data_entrada,
            "hora_entrada"      => $hora_entrada,            
            "motivo_entrada"    => $motivo_entrada,
            "qtde_entrada"      => $qtde_entrada            
        );
        
        return $this->db->insert("entrada", $valores);
    }  

}




?>