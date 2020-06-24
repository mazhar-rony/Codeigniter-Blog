<?php
//session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Login extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        
        $admin_id = $this->session->userdata('admin_id');

        if($admin_id != null)
        {
            redirect('super_admin', 'refresh');
        }
    }
    

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function check_login()
    {
        $admin_email = $this->input->post('admin_email', true);
        $admin_password = $this->input->post('admin_password', true);

        $result = $this->Admin_Login_Model->check_login_info($admin_email, $admin_password);

        //echo '<pre>';
        //print_r($result);
        //exit();

        $sdata = array();

        if($result)
        {
            $sdata['admin_id'] = $result->admin_id;
            $sdata['admin_name'] = $result->admin_name;
            $sdata['admin_designation'] = $result->admin_designation;

            $this->session->set_userdata($sdata);

            redirect('super_admin');
        }
        else
        {
            $sdata['exception'] = 'Invalid User Name or Password !';
            //$this->load->library('session');
            $this->session->set_userdata($sdata);
            
            redirect('admin_login');
        }
        
    }
}