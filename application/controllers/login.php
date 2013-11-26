<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {
    
    private $data = [];
    public $meta = [];

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_usuarios');
        $this->meta = loadAssets();
        $this->meta = loadPlugins($this->meta);
    }

    function index() {
        
        $this->data['base'] = $this->load->view('base',  $this->meta, true);
        $this->data['footer'] = $this->load->view('footer',  $this->meta, true);

        // VALIDATION RULES
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');


        // MODELO MEMBERSHIP
    //    $this->load->model('membership_model');
        $query = $this->m_usuarios->validateLogin();

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('login_view', $this->data);
        } else {
            if ($query) { // VERIFICA LOGIN E SENHA
                $data = array(
                    'username' => $this->input->post('username'),
                    'logged' => true
                );
              //  echo 'aki';die;
                $this->session->set_userdata($data);
                
                print_r( $this->session->set_userdata($data));
               redirect('admin/home');
            } else {
                
                redirect($this->index());
            }
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        
        redirect($this->index());
        
    }
}

?>
