<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerMedis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_TenagaMedis');
        $this->load->library('Template');
        check_session();
    }

    function get_tenagamedis()
    {
        $data['tenagamedis'] = $this->Model_TenagaMedis->get_medis();
        $this->template->load('Template/Template_admin', 'Form_TenagaMedis/Form_data_Medis', $data);
    }

    function aksiadd()
    {
        $this->template->load('Template/Template_admin', 'Form_TenagaMedis/Form_add_Medis');
    }

    function addmedis()
    {
        $nama       = $this->input->post('name');
        $phone      = $this->input->post('phone');
        $Address    = $this->input->post('alamat');
        $JK         = $this->input->post('gender');
        $email      = $this->input->post('email');


        $datatenagamedis = $this->Model_TenagaMedis->get_medis_by_email($email);
        if (isset($datatenagamedis)) 
        {
            $this->session->set_flashdata('Status', 'Input Gagal -> Email Sudah Terdaftar');
            redirect('aksitambahmedis');
        }
        else
        {
            
            $tenagamedis = array(
                'Nama_TenagaMedis'      => $nama,
                'NoHp_TenagaMedis'      => $phone,
                'Alamat_TenagaMedis'    => $Address,
                'JenisKelamin'          => $JK,
                'Status'                => 'TidakAktif',
                'date_created'          => get_current_date(),
                'Email'                 => $email
            );

            $addmedis = $this->Model_TenagaMedis->add_medis($tenagamedis);
            if ($addmedis) {
                $this->session->set_flashdata('Status', 'Berhasil Input ');
                redirect('tenagamedis');
            } else {
                $this->session->set_flashdata('Status', 'Input Gagal');
                redirect('tenagamedis');
            }
        }
    }

    function viewFormEditMedis($Id_TenagaMedis)
    {
        $data['editmedis'] = $this->Model_TenagaMedis->get_medis_by_id($Id_TenagaMedis);
        $this->template->load('Template/Template_admin', 'Form_TenagaMedis/Form_edit_Medis', $data);
    }

    function editmedis()
    {

        $Id_TenagaMedis = $this->input->post('submitid');
        $medis = array(
            'Nama_TenagaMedis'      => $this->input->post('name'),
            'NoHp_TenagaMedis'      => $this->input->post('phone'),
            'Alamat_TenagaMedis'    => $this->input->post('alamat'),
            'JenisKelamin'          => $this->input->post('gender'),
        );
        $editmedis = $this->Model_TenagaMedis->update_medis($Id_TenagaMedis, $medis);
        if ($editmedis) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('tenagamedis');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('tenagamedis');
        }
    }

    function editstatusmedis($Id_TenagaMedis, $status)
    {
        $tenagamedis = array(
            'Status' => $status
        );
        $editmedis = $this->Model_TenagaMedis->update_medis($Id_TenagaMedis, $tenagamedis);
        if ($editmedis) {
            $this->session->set_flashdata('Status', 'Edit succes');
            redirect('tenagamedis');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('tenagamedis');
        }
    }

    function deletemedis($Id_TenagaMedis)
    {
        $this->Model_TenagaMedis->delete_medis($Id_TenagaMedis);
        $this->session->set_flashdata('message', 'Data tenaga medis berhasil dihapus');
        redirect('tenagamedis');
    }
}