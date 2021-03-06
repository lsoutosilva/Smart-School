<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Home
 */
class Home extends CI_Controller {

    private $data = [];
    public $meta = [];

    /**
     * The Contructor!
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->meta = loadAssets('Admin');
        $this->meta = loadPlugins($this->meta);
        $this->load->model(['m_posts', 'm_usuarios']);
    }

    public function index() {
        
         // VALIDATION RULES
        $this->load->library('form_validation');
        $this->form_validation->set_rules('avisos_text', 'avisos_text', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        
        $this->data['usuario'] = $this->m_usuarios->listUser($this->session->userdata('username'));
        
         if ($this->form_validation->run() == TRUE) {
             
             $this->m_posts->insertPostAvisos($this->input->post('avisos_text'), $this->data['usuario'][0]->id_usuario);
        } 

        $this->data['posts'] = $this->m_posts->listPostsHome();
        
        // Carrega a view
        $this->data['base'] = $this->load->view('admin/base',  $this->meta, true);
        $this->data['footer'] = $this->load->view('admin/footer',  $this->meta, true);
        $this->load->view('admin/home', $this->data);
    }

}

// End of the Home

/* End of file home.php */
/* Location application/controllers/admin/home.php */
