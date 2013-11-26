<?php

class m_Usuarios extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    # VALIDA USUÁRIO

    function validateLogin() {
        $where = ['login' => $this->input->post('username'), 'senha' => md5($this->input->post('password'))];

        //recupera os categorias
        $this->db->select('id_usuario');
        $this->db->from('usuarios');
        $this->db->where($where);
        $query = $this->db->get();
        // print_r($query);die;
        //gera o resultado com merge de arrays
        //    return array('categorias' => $query->result());

        if ($query->num_rows == 1) {
            return true; // RETORNA VERDADEIRO
        }
    }

    # VERIFICA SE O USUÁRIO ESTÁ LOGADO

    function logged() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
            echo 'Voce nao tem permissao para entrar nessa para Efetuar Login</a>';
            die();
        }
    }

}

?>
