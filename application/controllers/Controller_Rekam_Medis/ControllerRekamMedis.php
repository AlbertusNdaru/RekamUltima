<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerRekamMedis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Rekam_Medis');
        $this->load->model('Model_TenagaMedis');
        $this->load->model('Model_Pemilik');
        $this->load->model('Model_Tindakan');
        $this->load->model('Model_Penyakit');
        check_session();
    }

    function get_rekam_medis()
    {
        $data['rekam_medis'] = $this->Model_Rekam_Medis->get_rekam_medis();
        // $data['rekam_medisbaru'] = $this->Model_Rekam_Medis->get_rekam_medis_baru();
        $this->template->load('Template/Template_admin', 'Form_Rekam_Medis/Form_data_RekamMedis', $data);
    }

    function get_detail_rekam_medis()
    {
        $data['detail_rm'] = $this->Model_Rekam_Medis->get_id_rekam_byHewan();
        $this->template->load('Template/Template_admin', 'Form_Rekam_Medis/Form_detail_RekamMedis', $data);
    }

    function viewTambahdataRekamMedis($Id_RekamMedis)
    {
        $data['rekam']     = $this->Model_Rekam_Medis->get_rekam_medis_byid($Id_RekamMedis);
        $data['penyakit']    = $this->Model_Penyakit->get_Penyakit();
        $data['tindakan']    = $this->Model_Tindakan->get_tindakan();
        $data['tenagamedis'] = $this->Model_TenagaMedis->get_medis();
        $this->template->load('Template/Template_admin', 'Form_Rekam_Medis/Form_add_detail_RM', $data);
    }

    function addDetailRM()
    {
        $dataRM = array(
            "Anamnesa"       => $_POST['anamnesa'],
            "BeratBadan"     => $_POST['bb'],
            "SuhuTubuh"      => $_POST['suhu'],
            "Id_Penyakit"    => $_POST['penyakit'],
            "Id_RekamMedis"  => $_POST['idrekam'],
            "Id_Tindakan"    => $_POST['tindakan'],
            "Id_TenagaMedis" => $_POST['tenagamedis']
        );
        $validate = $this->Model_Rekam_Medis->addDetaiRM($dataRM);
        if ($validate) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('rekammedis');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('rekammedis');
        }
    }
}
