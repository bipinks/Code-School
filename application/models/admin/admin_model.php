<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function __construct()
    {

        parent::__construct();
    }
    public function login($user,$pwd)
    {
        $this->db->where('user',$user);
        $this->db->where('pass',$pwd);
        $result = $this->db->get('admin_user');

        return $result->row_array();
    }



}