<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Club_model extends CI_Model
{
    public function __construct()
    {

        parent::__construct();
    }

    public function register($data) {

        return $this->db->insert('club_users',$data);

    }

    public function login($username, $password) {

        $password = md5($password);
        $this->db->select(array('id','club_name','email','reg_no','password'));
        $this->db->where(array('email' => $username,'password' => $password));
        $result  = $this->db->get('club_users');

        return $result->row_array();

    }

    public function getStudents($clubID) {

        settype($clubID,'integer');
        $this->db->where('club_id', $clubID);
        $result = $this->db->get('club_students');
        return $result->result_array();

    }

    public function addStudents($data) {
        return $this->db->insert('club_students',$data);
    }

    public function updateStudents($input_array,$id) {

        settype($id,'integer');
        return $this->db->where('id',$id)->update('club_students',$input_array);
    }

    public function get_student($id) {
        settype($id,'integer');

        return $this->db->where('id',$id)->get('club_students')->row_array();
    }

    public function getGallery($id) {
        settype($id,'integer');
        $result = $this->db->where('id',$id)->get('tbl_gallery');

        return $result->result_array();

    }

}