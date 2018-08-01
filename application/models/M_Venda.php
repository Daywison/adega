<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Venda extends CI_Model {

    public function listarVenda() {
        return $this->db->get('venda');

    } 
    public function consultaVenda() {
        $data1 = $this->input->post("data1");
        $data2 = $this->input->post("data2");

        $data1 = isset($data1)? $data1: date("Y-m-d");
        $data2 = isset($data2)? $data2: date("Y-m-d");

        $this->db->where("data_venda >=", $data1);
        $this->db->where("data_venda <=", $data2);
        return $this->db->get('venda');

    }  

    public function getVenda($id) {
        return $this->db->where("id_venda", $id)->get("venda");

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

    public function cancelaVenda(){        
        $id_venda = $this->input->post("id_venda");
        $this->db->where("id_venda", $id_venda)->delete("itens");
        $this->db->where("id_venda", $id_venda)->delete("venda");

    }

    public function finalizarVenda() {
        $id_venda = $this->input->post("id_venda");
        $data = $this->input->post("data_venda");
        $hora = $this->input->post("hora_venda");
    

        
        $valores = array(            
            "data_venda"      => $data,
            "hora_venda"      => $hora,
            "finalizada"     => "S"            
            );
        
        $this->db->where("id_venda", $id_venda);
        $query = $this->db->update("venda", $valores);

        if($query) {
            return true;
        }else{
            return false;
        }
    }
 

}




?>