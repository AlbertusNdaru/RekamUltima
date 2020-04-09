<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_landingpage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Pemilik');
        $this->load->model('Model_hewan');
        $this->load->model('Model_Rekam_Medis');
    }

    function landingpage()
    {
        $this->load->view("Landingpage/landingpage");
    }

    function rekammedis($Id_Pemilik)
    {
        check_session_pemilik();
        $data['hewan'] = $this->Model_hewan->get_hewan_by_pemilik($Id_Pemilik);
        $this->load->view("Landingpage/rekam_medis", $data);
    }

    function ViewPDFRekam($id_hewan)
    {
        check_session_pemilik();
        $data['record'] =  $this->Model_Rekam_Medis->get_detail_rm_byPemilik($id_hewan);
        $data['hewan'] =  $this->Model_hewan->get_hewan_by_id($id_hewan);
        $config           = array('format' => 'Folio', 'orientation' => 'L');
        $mpdf   = new \Mpdf\Mpdf($config);
        $html   = $this->load->view('Landingpage/Form_report_rekam', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function loginuser()
    {
        $this->load->view("Landingpage/login");
    }

    function register_hewan()
    {
        check_session_pemilik();
        $this->load->view("Landingpage/register_hewan");
    }

    function Viewedithewan($Id_Hewan)
    {
        $data['edithewan'] = $this->Model_hewan->get_hewan_by_id($Id_Hewan);
        $data['pemilik_hewan'] = $this->Model_Pemilik->get_pemilik();
        $this->load->view("Landingpage/edit_data_hewan", $data);
    }

    function edithewan()
    {

        $Id_Hewan = $this->input->post('submitid');
        $hewan = array(
            'Nama_hewan'    => $this->input->post('nama'),
            'Jenis_Kelamin' => $this->input->post('jeniskelamin'),
            'Jenis_Hewan'   => $this->input->post('jenishewan'),
            'Signalemen'    => $this->input->post('signalemen'),
            'Id_Pemilik'    => $this->input->post('pemilik'),


        );
        $edithewan = $this->Model_hewan->update_hewan($Id_Hewan, $hewan);
        if ($edithewan) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('datahewan');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('datahewan');
        }
    }

    function vieweditprofile()
    {
        check_session_pemilik();
        $data['pemilik_hewan'] = $this->Model_Pemilik->get_pemilik_by_id($_SESSION['pemilik']->Id_Pemilik);
        $this->load->view("Landingpage/edit_profile_pemilik", $data);
    }

    function editpemilik()
    {

        $Id_Pemilik = $this->input->post('submitid');
        $pemilik = array(
            'Nama_Pemilik'      => $this->input->post('name'),
            'NoHp_Pemilik'      => $this->input->post('phone'),
            'Alamat_Pemilik'    => $this->input->post('alamat'),
            'JenisKelamin'      => $this->input->post('gender')
        );
        $edithewan = $this->Model_Pemilik->update_pemilik($Id_Pemilik, $pemilik);
        if ($edithewan) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('landing');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('landing');
        }
    }
    function vieweditpassword()
    {
        check_session_pemilik();
        $data['pemilik_hewan'] = $this->Model_Pemilik->get_pemilik_by_id($_SESSION['pemilik']->Id_Pemilik);
        $this->load->view("Landingpage/edit_password", $data);
    }

    function editpassword()
    {

        $Id_Pemilik = $this->input->post('submitid');
        $pemilik = array(
            'Username'          => $this->input->post('username'),
            'Password'          => $this->input->post('password1')
        );
        $edithewan = $this->Model_Pemilik->update_pemilik($Id_Pemilik, $pemilik);
        if ($edithewan) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('landing');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('landing');
        }
    }

    function registeruser()
    {
        $this->load->view("Landingpage/register");
    }

    function validasilogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $validate = $this->Model_Pemilik->get_pemilik_by_username_password($username, $password);
        if (!is_null($validate)) {
            $this->session->set_userdata('pemilik', $validate);
            redirect('landing');
        } else {
            $this->session->set_flashdata('Error', 'Username dan Password yang dimasukan salah');
            redirect('loginuser');
        }
    }

    function logoutuser()
    {
        $this->session->unset_userdata('pemilik');
        redirect('landing');
    }

    function addhewan()
    {
        check_session_pemilik();
        $nama       = $this->input->post('nama');
        $JK         = $this->input->post('jeniskelamin');
        $JH         = $this->input->post('jenishewan');
        $signalemen = $this->input->post('signalemen');
        $pemiik     = $_SESSION['pemilik']->Id_Pemilik;

        $hewan = array(
            'Nama_Hewan'    => $nama,
            'Jenis_Kelamin' => $JK,
            'Jenis_Hewan'   => $JH,
            'Signalemen'    => $signalemen,
            'Id_Pemilik'    => $pemiik

        );
        $addhewan = $this->Model_hewan->add_hewan($hewan);
        if ($addhewan) {
            $rekammedis = array(
                'Id_Hewan' => $addhewan
            );
            $this->Model_Rekam_Medis->addRekamMedis($rekammedis);
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('datahewan');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('datahewan');
        }
    }

    function addpemilikfromlanding()
    {
        $nama       = $this->input->post('name');
        $phone      = $this->input->post('phone');
        $Address    = $this->input->post('alamat');
        $JK         = $this->input->post('gender');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $datapemilik = $this->Model_Pemilik->get_pemilik_by_Number($phone);

        if ($datapemilik) {
            $this->session->set_flashdata('Error', 'Nomer Telepon Sudah Terdaftar !');
            redirect('registeruser');
        } else {
            $pemilik = array(
                'Nama_Pemilik'   => $nama,
                'NoHp_Pemilik'   => $phone,
                'Alamat_Pemilik' => $Address,
                'Username'       => $username,
                'Password'       => $password,
                'Status'         => 'TidakAktif',
                'date_created'   => get_current_date(),
                'JenisKelamin'   => $JK

            );
            $addpemilik = $this->Model_Pemilik->add_pemilik($pemilik);
            if ($addpemilik) {
                $this->session->set_flashdata('Status', 'Input Succes');
                redirect('loginuser');
                // echo $addpemilik;
            } else {
                $this->session->set_flashdata('Status', 'Input Failed');
                redirect('register');
                // echo $addpemilik;
            }
        }
    }

    function artikel1()
    {
        $this->load->view("Landingpage/artikel1");
    }
}
