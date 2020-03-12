<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerPemilik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Pemilik');
        $this->load->library('Template');
        check_session();
    }

    function get_pemilik_hewan()
    {
        $data['pemilik_hewan'] = $this->Model_Pemilik->get_pemilik();
        $this->template->load('Template/Template_admin', 'Form_Pemilik/Form_data_Pemilik', $data);
    }

    function aksiadd()
    {
        $this->template->load('Template/Template_admin', 'Form_Pemilik/Form_add_Pemilik');
    }

    function addpemilik()
    {
        $nama       = $this->input->post('name');
        $phone      = $this->input->post('phone');
        $Address    = $this->input->post('alamat');
        $JK         = $this->input->post('gender');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $pemilik = array(
            'Nama_Pemilik'      => $nama,
            'NoHp_Pemilik'       => $phone,
            'Alamat_Pemilik'    => $Address,
            'Username'          => $username,
            'Password'          => $password,
            'Status'            => 'TidakAktif',
            'date_created'      => get_current_date(),
            'JenisKelamin'      => $JK

        );
        $addpemilik = $this->Model_Pemilik->add_pemilik($pemilik);
        if ($addpemilik) {
            $this->session->set_flashdata('Status', 'Input Succes');
            redirect('pemilik');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('pemilik');
        }
    }


    function viewFormEditPemilik($Id_Pemilik)
    {
        $data['editpemilik'] = $this->Model_Pemilik->get_pemilik_by_id($Id_Pemilik);
        $this->template->load('Template/Template_admin', 'Form_Pemilik/Form_edit_Pemilik', $data);
    }

    function editpemilik()
    {

        $Id_Pemilik = $this->input->post('submitid');
        $pemilik = array(
            'Nama_Pemilik'      => $this->input->post('name'),
            'NoHp_Pemilik'      => $this->input->post('phone'),
            'Alamat_Pemilik'    => $this->input->post('alamat'),
            'Username'          => $this->input->post('username'),
            'Password'          => $this->input->post('password'),
            'JenisKelamin'      => $this->input->post('gender')
        );
        $editpemilik = $this->Model_Pemilik->update_pemilik($Id_Pemilik, $pemilik);
        if ($editpemilik) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('pemilik');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('pemilik');
        }
    }

    function editstatuspemilik($Id_Pemilik, $status)
    {
        $pemilik = array(
            'Status' => $status
        );
        $editpemilik = $this->Model_Pemilik->update_pemilik($Id_Pemilik, $pemilik);
        if ($editpemilik) {
            $this->session->set_flashdata('Status', 'Edit succes');
            redirect('pemilik');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('pemilik');
        }
    }

    function deletepemilik($Id_Pemilik)
    {
        $this->Model_Pemilik->delete_pemilik($Id_Pemilik);
        $this->session->set_flashdata('message', 'Data pemilik berhasil dihapus');
        redirect('pemilik');
    }
}
