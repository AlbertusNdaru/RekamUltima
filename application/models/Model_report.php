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
}
