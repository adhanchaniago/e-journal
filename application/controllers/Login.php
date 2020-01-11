<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*  
 *  @author   : Creativeitem
 *  date    : 14 september, 2017
 *  Al-mazaya School Management System Pro
 *  http://codecanyon.net/user/Creativeitem
 *  http://support.creativeitem.com
 */

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
        $this->load->library('session');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }

    //Default function, redirects to logged in user area
    public function index() {

        if ($this->session->userdata('admin_login') == 1)
            redirect(site_url('admin/dashboard'), 'refresh');

        if ($this->session->userdata('teacher_login') == 1)
            redirect(site_url('teacher/dashboard'), 'refresh');

        // if ($this->session->userdata('student_login') == 1)
        //     redirect(site_url('student/dashboard'), 'refresh');

        // if ($this->session->userdata('parent_login') == 1)
        //     redirect(site_url('parents/dashboard'), 'refresh');

        // if ($this->session->userdata('librarian_login') == 1)
        //     redirect(site_url('librarian/dashboard'), 'refresh');

        // if ($this->session->userdata('accountant_login') == 1)
        //     redirect(site_url('accountant/dashboard'), 'refresh');

        $this->load->view('backend/login');
    }

    //Validating login from ajax request
    function validate_login() {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $credential = array('username' => $email, 'password' => sha1($password));
      $credential1 = array('nip' => $email, 'password' => sha1($password));
      // Checking login credential for admin
      $query = $this->db->get_where('admin', $credential);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          $this->session->set_userdata('admin_login', '1');
          $this->session->set_userdata('admin_id', $row->admin_id);
          $this->session->set_userdata('login_user_id', $row->admin_id);
          $this->session->set_userdata('name', $row->name);
          $this->session->set_userdata('login_type', 'admin');

          $data['session'] = 'admin';
        $data['user_id'] = $row->admin_id;
        $data['at'] = 'portal';
        $data['status'] = 'Online';
        $this->db->insert('online',$data);

          redirect(site_url('admin/dashboard'), 'refresh');
      }

      // Checking login credential for teacher
      $query = $this->db->get_where('teacher', $credential1);
      if ($query->num_rows() > 0) {
          $row = $query->row();
          $this->session->set_userdata('teacher_login', '1');
          $this->session->set_userdata('teacher_id', $row->teacher_id);
          $this->session->set_userdata('login_user_id', $row->teacher_id);
          $this->session->set_userdata('name', $row->name);
          $this->session->set_userdata('login_type', 'teacher');

          $data['session'] = 'teacher';
          $data['user_id'] = $row->teacher_id;
          $data['at'] = 'e-journal';
          $data['status'] = 'Online';
          $this->db->insert('online',$data);
          redirect(site_url('teacher/dashboard'), 'refresh');
      }

      $this->session->set_flashdata('login_error', get_phrase('invalid_login'));
      redirect(site_url('login'), 'refresh');
    }

    /*     * *DEFAULT NOR FOUND PAGE**** */

    function four_zero_four() {
        $this->load->view('four_zero_four');
    }
    
    /*     * *****LOGOUT FUNCTION ****** */

    function logout() {
            $this->db->where(array('user_id' => $this->session->userdata('login_user_id'), 'at' => 'e-journal'));
            $this->db->delete('online');
        
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(site_url('login'), 'refresh');
    }

}
