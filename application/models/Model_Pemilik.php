<?php
class Model_Pemilik extends CI_Model
{
    function get_pemilik()
    {

        $dataPemilik = $this->db->get('pemilik_hewan')->result();
        return $dataPemilik;
    }

    function get_pemilik_by_id($Id_Pemilik)
    {
        $this->db->where('Id_Pemilik', $Id_Pemilik);
        $getloginbyId = $this->db->get('pemilik_hewan')->row();
        return $getloginbyId;
    }

    function get_pemilik_by_username_password($username, $password)
    {
        $this->db->where('Username', $username);
        $this->db->where('Password', $password);
        $getpemilik = $this->db->get('pemilik_hewan')->row();
        return $getpemilik;
    }

    function get_pemilik_by_Number($NoHp_Pemilik)
    {
        $this->db->where('NoHp_Pemilik', $NoHp_Pemilik);
        $getpemilik = $this->db->get('pemilik_hewan')->row();
        return $getpemilik;
    }

    function get_pemilik_by_status()
    {
        $this->db->where("Status", 'Aktif');
        $getMedisById = $this->db->get('pemilik_hewan')->result();
        return $getMedisById;
    }
    function add_pemilik($dataPemilik)
    {
        $add_pemilik = $this->db->insert("pemilik_hewan", $dataPemilik);
        return $add_pemilik;
    }

    function update_pemilik($Id_Pemilik, $dataPemilik)
    {
        $this->db->where('Id_Pemilik', $Id_Pemilik);
        $updatepemilik = $this->db->update("pemilik_hewan", $dataPemilik);
        return $updatepemilik;
    }

    function delete_pemilik($Id_Pemilik)
    {
        $this->db->where('Id_Pemilik', $Id_Pemilik);
        $deletepemilik = $this->db->delete("pemilik_hewan");
        return $deletepemilik;
    }
}
