<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Produto extends CI_Model {

    public function listarProduto() {
        return $this->db->get('produto');

    }

    public function getProduto($id) {
        return $this->db->where("id_produto", $id)->get("produto");
    }

    public function excluir($id) {
        return $this->db->where("id_produto", $id)->delete("produto");
    }

    public function salvar() {
        $id_produto = $this->input->post("id_produto");
        $valores = array(
            "produto"  => $this->input->post("txt_produto"),
            "estoque_inicial"  => $this->input->post("txt_estoque_inicial"),
            "estoque_minimo"  => $this->input->post("txt_estoque_minimo"),
            "estoque_atual"  => $this->input->post("txt_estoque_atual"),
            "preco"  => $this->input->post("txt_preco"),
            "ativo_produto"  => $this->input->post("txt_ativo_produto")            
        );
        if($id_produto==""){
            $query = $this->db->insert("produto", $valores);
        } else {
            $this->db->where("id_produto", $id_produto);
            $query = $this->db->update("produto", $valores);
        }

        

        return $query;
    }




}




?>