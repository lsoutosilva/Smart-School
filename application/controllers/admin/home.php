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
    }

    public function index() {
        $this->data['base'] = $this->load->view('admin/base',  $this->meta, true);
        $this->data['footer'] = $this->load->view('admin/footer',  $this->meta, true);
        $this->load->view('admin/home', $this->data);
    }

}

// End of the Home

/* End of file home.php */
/* Location application/controllers/admin/home.php */
