<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->library('Template');
        check_session();
    }
    function vieweditprofil($Id_Admin)
    {
        check_session();
        $data['admin'] = $this->Model_admin->get_admin_by_id($Id_Admin);
        $this->template->load('Template/Template_admin', 'Form_admin/Form_profil', $data);
    }

    function editprofil()
    {

        $Id_Admin = $this->input->post('submitid');
        $admin = array(
            'Username'    => $this->input->post('username'),
            'Password' => $this->input->post('password'),

        );
        $editadmin = $this->Model_hewan->update_hewan($Id_Admin, $admin);
        if ($editadmin) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('dashboard');
        }
    }
}
