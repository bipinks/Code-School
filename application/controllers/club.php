<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Club extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('club_intro');
        $this->load->view('footer');
    }


    public function login()
    {

        $this->load->model('club_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $response = $this->club_model->login($username, $password);

        if (!empty($response)) {

            $this->session->set_userdata(array('userID' => $response['id'], 'email' => $response['email'], 'club_name' => $response['club_name'], 'reg_no' => $response['reg_no']));

            redirect('club/club_home');
        }

        $data['error_msg'] = 'Username or Password is Incorrect.! Please try again';

        $this->load->view('header');
        $this->load->view('club_intro', $data);
        $this->load->view('footer');
    }

    public function register()
    {

        $this->load->library('form_validation');
        $this->load->model('club_model');

        if ($this->input->post()) {

            $this->form_validation->set_rules('club_name', 'Club Name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('conf_password', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('location', 'Location', 'required');
            $this->form_validation->set_rules('contact_no', 'Club Name', 'required|regex_match[/^[0-9]{10}$/]');
            $this->form_validation->set_rules('reg_no', 'Club Name', 'required');

            $this->form_validation->set_error_delimiters('<span class="error" style="color: red; text-transform: none">', '</span>');

            if ($this->form_validation->run() !== FALSE) {

                $input_array = array(

                    'club_name' => $this->input->post('club_name'),
                    'address' => $this->input->post('address'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'location' => $this->input->post('location'),
                    'contact_no' => $this->input->post('contact_no'),
                    'reg_no' => $this->input->post('reg_no'),
                    'createdAt' => strtotime('now')

                );

                $this->club_model->register($input_array);

                redirect('club');

            }
        }

        $this->load->view('header');
        $this->load->view('register_club');
        $this->load->view('footer');
    }

    public function club_home()
    {
        $this->load->model('club_model');
        $userID = $this->session->userdata('userID');
        $data['students'] = $this->club_model->getStudents($userID);


        $this->load->view('header');
        $this->load->view('club_home_view',$data);
        $this->load->view('footer');


    }

    public function add_students() {

        $this->load->library('form_validation');
        $this->load->model('club_model');

        if($this->input->post()) {


            if (isset($_FILES['upload_images'])) {


                for ($i = 0; $i < count($_FILES['upload_images']['name']); $i++) {
                    //Get the temp file path
                    $tmpFilePath = $_FILES['upload_images']['tmp_name'][$i];
                    $actualName = substr($_FILES['upload_images']['name'][$i], 0, strrpos($_FILES['upload_images']['name'][$i], '.'));
                    $extension = substr($_FILES['upload_images']['name'][$i], 1, strrpos($_FILES['upload_images']['name'][$i], '.'));
                    $new = (microtime(true) * 1000);//Set file name as the current microtime
                    $set_name = str_replace('.', '_', $new); //Replace '.' with '_' in  file name

                    $upload_file_name = (microtime(true) * 1000);

                    $ext = end(explode('.', $_FILES['upload_images']['name'][$i]));
                    $upload_file_name = str_replace('.', '_', $upload_file_name).".".$ext;

                    $filepath = BASEURL . "assets/uploads/images";

                    if ($tmpFilePath != "") {
                        $new_file_name = $upload_file_name; // Set the new file name as the Original file name with .PDF Extension
                        //Setup our new file path
                        $newFilePath = BASEURL . "assets/uploads/images/" . $new_file_name; //Specifying upload directory

                        //Upload the file into the temp dir1
                        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        }
                    }
                }
            }

            $input_array = array(

                'reg_no' => $this->input->post('reg_no'),
                'name' => $this->input->post('name'),
                'club_id' => $this->session->userdata('userID'),
                'address' => $this->input->post('address'),
                'dob' => $this->input->post('dob'),
                'gender' => $this->input->post('gender'),
                'email' => $this->input->post('email'),
                'blood' => $this->input->post('blood'),
                'birth_star' => $this->input->post('birth_star'),
                'contact' => $this->input->post('contact')

            );

            $this->club_model->addStudents($input_array);

            redirect('club/club_home');

        }

        $this->load->view('header');
        $this->load->view('club_add_students');
        $this->load->view('footer');

    }

    public function student_edit($id) {

        if(empty($id))
            die('Invalid request');

        $this->load->model('club_model');
        $data['student'] = $this->club_model->get_student($id);


        if($this->input->post()) {


            if (isset($_FILES['upload_images'])) {


                for ($i = 0; $i < count($_FILES['upload_images']['name']); $i++) {
                    //Get the temp file path
                    $tmpFilePath = $_FILES['upload_images']['tmp_name'][$i];
                    $actualName = substr($_FILES['upload_images']['name'][$i], 0, strrpos($_FILES['upload_images']['name'][$i], '.'));
                    $extension = substr($_FILES['upload_images']['name'][$i], 1, strrpos($_FILES['upload_images']['name'][$i], '.'));
                    $new = (microtime(true) * 1000);//Set file name as the current microtime
                    $set_name = str_replace('.', '_', $new); //Replace '.' with '_' in  file name

                    $upload_file_name = (microtime(true) * 1000);

                    $ext = end(explode('.', $_FILES['upload_images']['name'][$i]));
                    $upload_file_name = str_replace('.', '_', $upload_file_name).".".$ext;

                    $filepath = BASEURL . "assets/uploads/images";

                    if ($tmpFilePath != "") {
                        $new_file_name = $upload_file_name; // Set the new file name as the Original file name with .PDF Extension
                        //Setup our new file path
                        $newFilePath = BASEURL . "assets/uploads/images/" . $new_file_name; //Specifying upload directory

                        //Upload the file into the temp dir1
                        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        }
                    }
                }
            }

            $input_array = array(

                'reg_no' => $this->input->post('reg_no'),
                'name' => $this->input->post('name'),
                'club_id' => $this->session->userdata('userID'),
                'address' => $this->input->post('address'),
                'dob' => $this->input->post('dob'),
                'gender' => $this->input->post('gender'),
                'email' => $this->input->post('email'),
                'blood' => $this->input->post('blood'),
                'birth_star' => $this->input->post('birth_star'),
                'contact' => $this->input->post('contact')

            );

            $this->club_model->updateStudents($input_array,$id);

            redirect('club/club_home');

        }

        $this->load->view('header');
        $this->load->view('club_edit_students',$data);
        $this->load->view('footer');

    }

    public function view_gallery($id = '') {

        if(empty($id)) {
            show_404();
        }

        $this->load->model('club_model');
        $data['result'] = $this->club_model->getGallery($id);

        $data['stud'] = $this->club_model->get_student($id);
        $data['id'] = $id;

        $this->load->view('header');
        $this->load->view('view_gallery',$data);
        $this->load->view('footer');


    }

    public function upload_images() {

        $id = $this->uri->segment(3);

        if(empty($id)) {
            show_404();
        }
        $this->load->model('club_model');
        $data['stud'] = $this->club_model->get_student($id);
        $data['id'] = $id;



        if($this->input->post()) {


            if (isset($_FILES['upload_images'])) {


                for ($i = 0; $i < count($_FILES['upload_images']['name']); $i++) {
                    //Get the temp file path
                    $tmpFilePath = $_FILES['upload_images']['tmp_name'][$i];
                    $actualName = substr($_FILES['upload_images']['name'][$i], 0, strrpos($_FILES['upload_images']['name'][$i], '.'));
                    $extension = substr($_FILES['upload_images']['name'][$i], 1, strrpos($_FILES['upload_images']['name'][$i], '.'));
                    $new = (microtime(true) * 1000);//Set file name as the current microtime
                    $set_name = str_replace('.', '_', $new); //Replace '.' with '_' in  file name

                    $upload_file_name = (microtime(true) * 1000);

                    $ext = explode('.', $_FILES['upload_images']['name'][$i]);
                    $ext = end($ext);
                    $upload_file_name = str_replace('.', '_', $upload_file_name).".".$ext;

                    $filepath = BASEURL . "assets/uploads/user_gallery/images";

                    if ($tmpFilePath != "") {
                        $new_file_name = $upload_file_name; // Set the new file name as the Original file name with .PDF Extension
                        //Setup our new file path
                        $newFilePath = BASEURL . "assets/uploads/user_gallery/images/" . $new_file_name; //Specifying upload directory

                        //Upload the file into the temp dir1
                        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        }
                    }
                }
            }

        }

        $this->load->view('header');
        $this->load->view('gallery_upload',$data);
        $this->load->view('footer');
    }
}