<?php

class m_Posts extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    # VALIDA USUÁRIO

    function listPostsHome() {
      //  $where = ['login' => $this->input->post('username'), 'senha' => md5($this->input->post('password'))];

        //recupera os categorias
        $this->db->select('*');
        $this->db->from('avisos_posts as a');
        $this->db->join('usuarios as u', 'a.id_usuario = u.id_usuario');
        $this->db->limit(4);
       // $this->db->where($where);
        $query = $this->db->get();
        
        return $query->result();
        
    }

}

?>
