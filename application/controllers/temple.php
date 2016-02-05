<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Temple extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('temple_intro');
        $this->load->view('footer');
    }

    public function register() {

        $this->load->view('header');
        $this->load->view('register_temple');
        $this->load->view('footer');
    }
}