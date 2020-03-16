<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerPenyakit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Penyakit');
        $this->load->library('Template');
        check_session();
    }

    function get_penyakit()
    {
        $data['penyakit'] = $this->Model_Penyakit->get_penyakit();
        $this->template->load('Template/Template_admin', 'Form_Penyakit/Form_data_Penyakit', $data);
    }

    function aksiadd()
    {
        $this->template->load('Template/Template_admin', 'Form_Penyakit/Form_add_Penyakit');
    }

    function addpenyakit()
    {
        $nama   = $this->input->post('penyakit');
        $gejala   = $this->input->post('gejala');

        $penyakit = array(
            'Nama_Penyakit'     => $nama,
            'Gejala'            => $gejala
        );
        $addpenyakit = $this->Model_Penyakit->add_penyakit($penyakit);
        if ($addpenyakit) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('penyakit');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('penyakit');
        }
    }

    function viewFormEditPenyakit($Id_Penyakit)
    {
        $data['editpenyakit'] = $this->Model_Penyakit->get_penyakit_by_id($Id_Penyakit);
        $this->template->load('Template/Template_admin', 'Form_Penyakit/Form_edit_Penyakit', $data);
    }

    function editpenyakit()
    {

        $Id_Penyakit = $this->input->post('submitid');
        $penyakit = array(
            'Nama_Penyakit' => $this->input->post('penyakit'),
            'Gejala'        => $this->input->post('gejala')

        );
        $editpenyakit = $this->Model_Penyakit->update_penyakit($Id_Penyakit, $penyakit);
        if ($editpenyakit) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('penyakit');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('penyakit');
        }
    }

    function deletepenyakit($Id_Penyakit)
    {
        $this->Model_Penyakit->delete_penyakit($Id_Penyakit);
        $this->session->set_flashdata('message', 'Data Penyakit Berhasil Dihapus');
        redirect('penyakit');
    }
}