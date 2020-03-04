<?php
class Model_hewan extends CI_Model
{
    function get_hewan()
    {
        $this->db->select("a.*, b.Nama_Pemilik");
        $this->db->from("hewan as a");
        $this->db->join("pemilik_hewan as b","b.Id_Pemilik = a.Id_pemilik");
        $dataHewan = $this->db->get()->result();
        return $dataHewan;
    }
}
