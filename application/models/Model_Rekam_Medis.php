<?php
class Model_Rekam_Medis extends CI_Model
{
    function get_rekam_medis()
    {
        $this->db->select('a.*, b.Nama_Hewan');
        $this->db->from('Rekam_Medis as a');
        $this->db->join('hewan as b', 'b.Id_Hewan=a.Id_Hewan');
        $dataRekam = $this->db->get()->result();
        return $dataRekam;
    }

    function get_rekam_medis_byid($id_rekam)
    {
        $this->db->select('b.Nama_Hewan, a.Id_RekamMedis');
        $this->db->from('rekam_medis as a');
        $this->db->join('hewan as b','b.Id_Hewan = a.Id_Hewan');
        $this->db->where('a.Id_RekamMedis', $id_rekam);
        return $this->db->get()->row();
    }

    // function get_rekam_medis_baru()
    // {
    //     $this->db->select('a.*, b.Nama_Hewan');
    //     $this->db->from('Rekam_Medis as a');
    //     $this->db->join('hewan as b', 'b.Id_Hewan=a.Id_Hewan');
    //     $this->db->where('a.Id_TenagaMedis',null);
    //     $dataRekam = $this->db->get()->result();
    //     return $dataRekam;
    // }

    function addRekamMedis($data)
    {
        return $this->db->insert('rekam_medis',$data);
    }

    function addDetaiRM($data)
    {
        return $this->db->insert('detail_rm', $data);
    }
}
