<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_level extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_level');
        $this->load->library('Template');
        check_session();
    }

    function get_level()
    {
        $data['level'] = $this->Model_level->get_level();
        $this->template->load('Template/Template_admin', 'Form_Level/Form_level', $data);
    }

    function aksiadd()
    {
        $this->template->load('Template/Template_admin', 'Form_Level/Form_add_level');
    }

    function addlevel()
    {
        $hakakses   = $this->input->post('hakakses');

        $level = array(
            'Deskripsi'     => $hakakses
        );
        $addlevel = $this->Model_level->addlevel($level);
        if ($addlevel) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('level');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('level');
        }
    }

    function viewFormEditLevel($Id_Level)
    {
        $data['editlevel'] = $this->Model_level->get_level_by_id($Id_Level);
        $this->template->load('Template/Template_admin', 'Form_Level/Form_edit_level', $data);
    }

    function editlevel()
    {

        $Id_Level = $this->input->post('submitid');
        $level = array(
            'Deskripsi' => $this->input->post('hakakses')

        );
        $editlevel = $this->Model_level->update_level($Id_Level, $level);
        if ($editlevel) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('level');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('level');
        }
    }

    function deletlevel($Id_Level)
    {
        $this->Model_level->delete_level($Id_Level);
        $this->session->set_flashdata('message', 'Data Penyakit Berhasil Dihapus');
        redirect('level');
    }
}
