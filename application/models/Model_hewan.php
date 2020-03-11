<?php
class Model_hewan extends CI_Model
{
    function get_hewan()
    {
        $this->db->select("a.*, b.Nama_Pemilik");
        $this->db->from("hewan as a");
        $this->db->join("pemilik_hewan as b", "b.Id_Pemilik = a.Id_pemilik");
        $dataHewan = $this->db->get()->result();
        return $dataHewan;
    }

    function get_hewan_by_id($Id_Hewan)
    {
        $this->db->where('Id_Hewan', $Id_Hewan);
        $getloginbyId = $this->db->get("hewan")->row();
        return $getloginbyId;
    }

    function add_hewan($dataHewan)
    {
        $add_hewan = $this->db->insert("hewan", $dataHewan);
        return $add_hewan;
    }

    function update_hewan($Id_Hewan, $dataHewan)
    {
        $this->db->where('Id_Hewan', $Id_Hewan);
        $updatehewan = $this->db->update("hewan", $dataHewan);
        return $updatehewan;
    }

    function delete_hewan($Id_Hewan)
    {
        $this->db->where('Id_Hewan', $Id_Hewan);
        $deletehewan = $this->db->delete("hewan");
        return $deletehewan;
    }
}
