<?php

class m_Posts extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    # VALIDA USUÁRIO

    function listPostsHome() {

        $this->db->select('*');
        $this->db->from('avisos_posts as a');
        $this->db->join('usuarios as u', 'a.id_usuario = u.id_usuario');
        $this->db->order_by("id_aviso_post", "desc"); 
        $this->db->limit(4);
        $query = $this->db->get();

        return $query->result();
    }

    public function insertPostAvisos($text, $idUsuario) {
        $data = ['post' => $text, 'id_usuario' => $idUsuario];

        $this->db->insert('avisos_posts', $data);
    }

}

?>
