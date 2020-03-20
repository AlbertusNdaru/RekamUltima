<?php
class Model_report extends CI_Model
{
    function get_hewan()
    {
        $this->db->select("a.*, b.Nama_Pemilik");
        $this->db->from("hewan as a");
        $this->db->join("pemilik_hewan as b", "b.Id_Pemilik = a.Id_pemilik",'right');
        $this->db->order_by('b.Nama_Pemilik', 'asc');
        $dataHewan = $this->db->get()->result();
        return $dataHewan;
    }

    function get_detail_rm_byPemilik()
    {
        $this->db->select('a.*, b.Nama_Hewan, c.Nama_Penyakit,d.Nama_Tindakan,e.Nama_TenagaMedis');
        $this->db->from('detail_rm as a');
        $this->db->join('rekam_medis as f', 'f.Id_RekamMedis = a.Id_RekamMedis');
        $this->db->join('hewan as b', 'b.Id_Hewan = f.Id_Hewan');
        $this->db->join('penyakit as c', 'c.Id_Penyakit = a.Id_Penyakit');
        $this->db->join('tindakan as d', 'd.Id_Tindakan = a.Id_Tindakan');
        $this->db->join('tenagamedis as e', 'e.Id_TenagaMedis = a.Id_TenagaMedis','right');
        // $this->db->where('f.Id_Hewan', $id_hewan);
        return $this->db->get()->result();
        // return$this->db->last_query(); 
    }

    function get_kritik()
    {
        $data_kritik = $this->db->get('kritik')->result();
        return $data_kritik;
    }
}
