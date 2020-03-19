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

    function get_id_rekam_byHewan($id_hewan)
    {
        $this->db->where('Id_Hewan',$id_hewan);
        return $this->db->get('rekam_medis')->result();
    }

    function get_detail_rm_byPemilik($id_hewan)
    {
        $this->db->select('a.*, b.Nama_Hewan, c.Nama_Penyakit,d.Nama_Tindakan,e.Nama_TenagaMedis');
        $this->db->from('detail_rm as a');
        $this->db->join('rekam_medis as f','f.Id_RekamMedis = a.Id_RekamMedis');
        $this->db->join('hewan as b','b.Id_Hewan = f.Id_Hewan');
        $this->db->join('penyakit as c','c.Id_Penyakit = a.Id_Penyakit');
        $this->db->join('tindakan as d','d.Id_Tindakan = a.Id_Tindakan');
        $this->db->join('tenagamedis as e','e.Id_TenagaMedis = a.Id_TenagaMedis');
        $this->db->where('f.Id_Hewan', $id_hewan);
        return$this->db->get()->result();
        // return$this->db->last_query(); 
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
