<?php
class Model_admin extends CI_Model
{
    function get_admin()
    {
        $getAdmin = $this->db->get('admin')->result();
        return $getAdmin;
    }

    function get_admin_by_admin($username, $password)
    {
        $this->db->where("Username", $username);
        $this->db->where("Password", $password);
        $getloginbyadmin = $this->db->get('admin')->row();
        return $getloginbyadmin;
    }

    function get_admin_by_admin_password($username, $password)
    {
        $this->db->select('admin.*,tenagamedis.Nama_TenagaMedis as namatenagamedis,
        tenagamedis.Status');
        $this->db->from('admin');
        $this->db->join(
            'tenagamedis',
            'tenagamedis.Id_TenagaMedis=admin.Id_TenagaMedis'
        );
        $this->db->where("admin.Username", $username);
        $this->db->where("admin.Password like BINARY", $password);
        $this->db->where("admin.Status", 'Aktif');
        $getloginyuserpass = $this->db->get()->row();
        return $getloginyuserpass;
    }

    function get_admin_by_id($Id_Admin)
    {
        $this->db->where('Id_Admin', $Id_Admin);
        $getloginbyId = $this->db->get('admin')->row();
        return $getloginbyId;
    }

    function get_admin_by_id_tenagamedis($Id_Admin)
    {
        $this->db->where("Id_TenagaMedis", $Id_Admin);
        $getdatamedis = $this->db->get('admin')->row();
        return $getdatamedis;
    }

    function add_admin($dataAdmin)
    {
        return $this->db->insert('admin', $dataAdmin);

    }

    function update_admin($Id_Admin, $dataAdmin)
    {
        $this->db->where('Id_Admin', $Id_Admin);
        $updateAdmin = $this->db->update("admin", $dataAdmin);
        return $updateAdmin;
    }

    function delete_admin($Id_Admin)
    {
        $this->db->where('Id_Admin', $Id_Admin);
        $deleteAdmin = $this->db->delete("admin");
        return $deleteAdmin;
    }
}
