<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Venda extends CI_Model {

    public function listarVenda() {
        return $this->db->get('venda');

    }  

    public function listarVendasAtuais() {
        $data = date("Y-m-d");
        $this->db->join("produto", "produto.id_produto = venda.id_produto");
        $this->db->where("data_venda", $data);
        return $this->db->get("venda");
    }

    public function novaVenda() {
        $data = $this->input->post("data_venda");
        $hora = $this->input->post("hora_venda");
    

        
        $valores = array(            
            "data_venda"      => $data,
            "hora_venda"      => $hora            
            );
        
        $query =  $this->db->insert("venda", $valores);

        if($query) {
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function inserir() {
        $id_produto = $this->input->post("id_produto");
        $data_venda = date("Y-m-d");
        $hora_venda = date("H:i:s");
        $motivo_venda = $this->input->post("motivo");
        $qtde_venda = $this->input->post("qtde");

        $valores = array(
            "id_produto"        => $id_produto,
            "data_venda"      => $data_venda,
            "hora_venda"      => $hora_venda,            
            "motivo_venda"    => $motivo_venda,
            "qtde_venda"      => $qtde_venda            
        );
        
        return $this->db->insert("venda", $valores);
    }  

}




?>