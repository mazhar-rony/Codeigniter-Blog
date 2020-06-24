<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_Admin extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        
        $admin_id = $this->session->userdata('admin_id');

        if($admin_id == null)
        {
            redirect('admin_login', 'refresh');
        }
    }
    

    public function index()
    {
        $this->load->view('admin/admin_master');
    }

    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_designation');

        $sdata = array();

        $sdata['message'] = 'You Are Successfully Logout !';
        $this->session->set_userdata($sdata);

        redirect('admin_login', 'refresh');
    }
}