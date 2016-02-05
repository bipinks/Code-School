<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->library('session');
    }

    public function index() {

        $this->load->model('admin/admin_model');

        if($this->session->userdata('admin_id')) {
            redirect('web_admin/dashboard');
        }
        if($this->input->is_ajax_request()) {

            $user  = $this->input->post('user');
            $pass  = $this->input->post('pass');
            $res = $this->admin_model->login($user,$pass);

            if(!empty($res)) {
                $this->session->set_userdata(array('admin_id' => $res['id'], 'admin_user' => $res['user']));
                echo "logged";
            }
            else {
                echo "failed";
            }

        }
        else {
            $this->load->view('admin/header');
            $this->load->view('admin/sign-in');
            $this->load->view('admin/footer');
        }
    }

    public function dashboard() {
        echo "This is admin dash board";
    }
}