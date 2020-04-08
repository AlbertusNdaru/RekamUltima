<?php
class Model_TenagaMedis extends CI_Model
{
    function get_medis()
    {

        $dataMedis = $this->db->get('tenagamedis')->result();
        return $dataMedis;
    }

    function get_medis_by_username($username)
    {
        $this->db->where("Nama_TenagaMedis", $username);
        $getloginbymedis = $this->db->get('tenagamedis')->row();
        return $getloginbymedis;
    }

    function get_medis_by_id($Id_TenagaMedis)
    {
        $this->db->where('Id_TenagaMedis', $Id_TenagaMedis);
        $getloginbyId = $this->db->get('tenagamedis')->row();
        return $getloginbyId;
    }

    function get_medis_by_status()
    {
        $this->db->where("Status", 'Aktif');
        $getMedisById = $this->db->get('tenagamedis')->row();
        return $getMedisById;
    }

    function get_medis_by_email($email)
    {
        $this->db->where("Email", $email);
        $getAdminByEmail = $this->db->get("tenagamedis")->row();
        return $getAdminByEmail;
    }

    function add_medis($datamedis)
    {
        $add_medis = $this->db->insert("tenagamedis", $datamedis);
        return $add_medis;
    }

    function update_medis($Id_TenagaMedis, $datamedis)
    {
        $this->db->where('Id_TenagaMedis', $Id_TenagaMedis);
        $updatemedis = $this->db->update("tenagamedis", $datamedis);
        return $updatemedis;
    }

    function delete_medis($Id_TenagaMedis)
    {
        $this->db->where('Id_TenagaMedis', $Id_TenagaMedis);
        $deletemedis = $this->db->delete("tenagamedis");
        return $deletemedis;
    }
}
