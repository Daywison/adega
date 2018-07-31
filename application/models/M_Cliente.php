<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cliente extends CI_Model {

    public function listarCliente() {
        return $this->db->get('cliente');

    }

    public function getCliente($id) {
        return $this->db->where("id_cliente", $id)->get("cliente");
    }

    public function excluir($id) {
        return $this->db->where("id_cliente", $id)->delete("cliente");
    }

    public function buscaCliente() {
        $pesq = $this->input->post("pesq");
        $this->db->like("cliente", $pesq);
        return $this->db->get('cliente');
    }

    public function salvar() {
        $id_cliente = $this->input->post("id_cliente");
        $valores = array(
            "cliente"  => $this->input->post("txt_cliente"),
            "endereco"  => $this->input->post("txt_endereco"),
            "bairro"  => $this->input->post("txt_bairro"),
            "cidade"  => $this->input->post("txt_cidade"),
            "uf"  => $this->input->post("txt_uf"),
            "cep"  => $this->input->post("txt_cep"),
            "email"  => $this->input->post("txt_email"),
            "celular"  => $this->input->post("txt_celular")
        );
        if($id_cliente==""){
            $query = $this->db->insert("cliente", $valores);
        } else {
            $this->db->where("id_cliente", $id_cliente);
            $query = $this->db->update("cliente", $valores);
        }

        

        return $query;
    }




}




?>