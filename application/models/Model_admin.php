<?php
class Model_admin extends CI_Model
{
    function get_admin()
    {
        $getAdmin = $this->db->get('admin')->result();
        return $getAdmin;
    }

    function get_admin_by_admin($username)
    {
        $this->db->where("Username", $username);
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

    function get_admin_by_id($id)
    {
        $this->db->where('Id_Admin', $id);
        $getloginbyId = $this->db->get('admin')->row();
        return $getloginbyId;
    }

    function get_admin_by_id_tenagamedis($id)
    {
        $this->db->where("Id_TenagaMedis", $id);
        $getdatakaryawan = $this->db->get('admin')->row();
        return $getdatakaryawan;
    }

    function add_admin($dataAdmin)
    {
        $this->db->insert('admin', $dataAdmin);
    }

    function update_admin($idAdmin, $dataAdmin)
    {
        $this->db->where('Id_Admin', $idAdmin);
        $updateAdmin = $this->db->update("admin", $dataAdmin);
        return $updateAdmin;
    }

    function delete_admin($idAdmin)
    {
        $this->db->where('Id_Admin', $idAdmin);
        $deleteAdmin = $this->db->delete("admin");
        return $deleteAdmin;
    }
}
