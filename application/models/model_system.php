<?php

class model_system extends CI_Model
{

    public function simpan_db()
    {
        $data = array(
            'id_user' => '',
            'nama' => $this->input->post('namas'),
            'username' => $this->input->post('usernames'),
            'password' => $this->input->post('passwords'),

        );

        $this->db->insert('masyarakat', $data);
        header("Location:" . base_url() . 'Dashboard/register');
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($id_user, $data)
    {
        $this->db->set($data);
        $this->db->where('id_user', $id_user);
        $this->db->update('masyarakat');
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_user()
    {
        $data = $this->db->get('masyarakat');
        return $data->result();
    }

    public function count_user()
    {
        $data = $this->db->get('masyarakat');
        return $data->num_rows();
    }

    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function report()
    {
        $doc = array(
            'id_pengaduan' => "",
            'nama' => $this->input->post('nama'),
            'tgl_pengaduan' => $this->input->post('tgl'),
            'isi_pengaduan' => $this->input->post('isi'),
            'file' => $this->input->post('files'),
        );
        $this->db->insert('pengaduan', $doc);
        header('Location:'. base_url().'Dashboard/login');
    }

    public function get_report()
    {
        $doc = $this->db->get('pengaduan');
        return $doc->result();
    }

    public function count_report()
    {
        $data = $this->db->get('pengaduan');
        return $data->num_rows();
    }
}
