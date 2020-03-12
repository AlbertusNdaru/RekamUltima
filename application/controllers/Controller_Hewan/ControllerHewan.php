<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerHewan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_hewan');
        $this->load->model('Model_pemilik');
        $this->load->library('Template');
        check_session();
    }


    function get_hewan()
    {
        $data['hewan'] = $this->Model_hewan->get_hewan();

        $this->template->load('Template/Template_admin', 'Form_Hewan/Form_data_Hewan', $data);
    }

    function aksiadd()
    {
        $datapemilik['pemilik_hewan'] = $this->Model_pemilik->get_pemilik();
        $this->template->load('Template/Template_admin', 'Form_Hewan/Form_add_Hewan', $datapemilik);
    }

    function addhewan()
    {
        $nama       = $this->input->post('nama');
        $JK         = $this->input->post('jeniskelamin');
        $JH         = $this->input->post('jenishewan');
        $signalemen = $this->input->post('signalemen');
        $pemiik     = $this->input->post('pemilik');

        $hewan = array(
            'Nama_Hewan'        => $nama,
            'Jenis_Kelamin'     => $JK,
            'Jenis_Hewan'       => $JH,
            'Signalemen'        => $signalemen,
            'Id_Pemilik'        => $pemiik, 
            'Status'            => 'Mati'

        );
        $addhewan = $this->Model_hewan->add_hewan($hewan);
        if ($addhewan) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('hewan');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('hewan');
        }
    }

    function viewFormEdithewan($Id_Hewan)
    {
        $data['edithewan'] = $this->Model_hewan->get_hewan_by_id($Id_Hewan);
        $data['pemilik_hewan'] = $this->Model_pemilik->get_pemilik();
        $this->template->load('Template/Template_admin', 'Form_Hewan/Form_edit_Hewan', $data);
    }

    function edithewan()
    {

        $Id_Hewan = $this->input->post('submitid');
        $hewan = array(
            'Nama_hewan'    => $this->input->post('nama'),
            'Jenis_Kelamin' => $this->input->post('jeniskelamin'),
            'Jenis_Hewan'   => $this->input->post('jenishewan'),
            'Signalemen'    => $this->input->post('signalemen'),
            'Id_Pemilik'    => $this->input->post('pemilik')

        );
        $edithewan = $this->Model_hewan->update_hewan($Id_Hewan, $hewan);
        if ($edithewan) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('hewan');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('hewan');
        }
    }

    function editstatushewan($Id_Hewan, $status)
    {
        $hewan = array(
            'Status' => $status
        );
        $edithewan = $this->Model_hewan->update_hewan($Id_Hewan, $status);
        if ($edithewan) {
            $this->session->set_flashdata('Status', 'Edit succes');
            redirect('hewan');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('hewan');
        }
    }

    function deletehewan($Id_Hewan)
    {
        $this->Model_hewan->delete_hewan($Id_Hewan);
        $this->session->set_flashdata('message', 'Data Hewan Berhasil Dihapus');
        redirect('hewan');
    }
}
