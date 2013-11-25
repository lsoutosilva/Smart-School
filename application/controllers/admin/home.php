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
       // $this->meta = loadAssets('Admin');
     //   $this->meta = loadPlugins($this->meta);
    }

    public function index() {
        $this->data['topo'] = $this->load->view('admin/topo');
        $this->load->view('admin/home', $this->data);
    }

}

// End of the Home

/* End of file home.php */
/* Location application/controllers/admin/home.php */
