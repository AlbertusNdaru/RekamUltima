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

    function get_hewan_by_pemilik($Id_Pemilik)
    {
        $this->db->where("Id_Pemilik", $Id_Pemilik);
        $getdatapemilik = $this->db->get('hewan')->result();
        return $getdatapemilik;
    }

    function add_hewan($dataHewan)
    {
        $add_hewan = $this->db->insert("hewan", $dataHewan);
        if ($add_hewan) {
            return $this->db->insert_id();
        } else {
            return $add_hewan;
        }
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

    function get_hewan_by_status_mati()
    {
        $this->db->where("Status", 'Mati');
        $getkucingmati = $this->db->get('hewan')->result();
        return $getkucingmati;
    }
    function get_hewan_by_status_hidup()
    {
        $this->db->where("Status", 'Hidup');
        $getkucinghidup = $this->db->get('hewan')->result();
        return $getkucinghidup;
    }

    function get_hewan_by_kucing()
    {
        $this->db->where("Jenis_Hewan", 'Kucing');
        $getkucing = $this->db->get('hewan')->result();
        return $getkucing;
    }
}
