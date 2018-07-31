<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Itens extends CI_Model {  

    public function listarItens() {
        $id_venda = $this->input->post("id_venda");       
        $this->db->join("produto", "produto.id_produto = itens.id_produto");
        $this->db->where("id_venda", $id_venda);
        return $this->db->get("itens");
    }

    public function inserir() {
        $id_venda = $this->input->post("id_venda");
        $id_produto = $this->input->post("id_produto");
        $preco = $this->input->post("preco");
        $qtde = $this->input->post("qtde");

        $valores = array(
            "id_produto"        => $id_produto,
            "id_venda"      => $id_venda,
            "qtde"      => $qtde,            
            "preco"    => $preco            
        );
        
        return $this->db->insert("itens", $valores);
    }

    public function excluir() {
        $id = $this->input->post("id_item");
        $this->db->where("id_item", $id)->delete("itens");
    }  

}




?>