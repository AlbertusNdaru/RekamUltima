<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerTindakan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Tindakan');
        $this->load->library('Template');
        check_session();
    }
    function get_tindakan()
    {
        $data['tindakan'] = $this->Model_Tindakan->get_tindakan();
        $this->template->load('Template/Template_admin', 'Form_Tindakan/Form_data_Tindakan', $data);
    }
    function aksiadd()
    {
        $this->template->load('Template/Template_admin', 'Form_Tindakan/Form_add_Tindakan');
    }

    function addtindakan()
    {
        $nama   = $this->input->post('tindakan');

        $tindakan = array(
            'Nama_Tindakan'     => $nama
        );
        $addtindakan = $this->Model_Tindakan->add_tindakan($tindakan);
        if ($addtindakan) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('tindakan');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('tindakan');
        }
    }

    function viewFormEditTindakan($Id_Tindakan)
    {
        $data['edittindakan'] = $this->Model_Tindakan->get_tindakan_by_id($Id_Tindakan);
        $this->template->load('Template/Template_admin', 'Form_Tindakan/Form_edit_Tindakan', $data);
    }

    function edittindakan()
    {

        $Id_Tindakan = $this->input->post('submitid');
        $tindakan = array(
            'Nama_Tindakan' => $this->input->post('tindakan')

        );
        $edittindakan = $this->Model_Tindakan->update_tindakan($Id_Tindakan, $tindakan);
        if ($edittindakan) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('tindakan');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('tindakan');
        }
    }

    function deletetindakan($Id_Tindakan)
    {
        $this->Model_Tindakan->delete_tindakan($Id_Tindakan);
        $this->session->set_flashdata('message', 'Data Tindakan Berhasil Dihapus');
        redirect('tindakan');
    }
}