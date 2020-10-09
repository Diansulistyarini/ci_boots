<?php

class model_system extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    // cek login
    public function cek_login($where)
    {
        $petugas = $this->db->get_where('petugas', $where);
        $masyarakat = $this->db->get_where('masyarakat', $where);
        if ($petugas->result() == null) {
            return $masyarakat;
        } else {
            return $petugas;
        }
    }

    public function getid_petugas($id_petugas)
    {
        $this->db->where("id_petugas", $id_petugas);
		$query = $this->db->get('petugas');
		return $query->result();
    }

    // function auth_masyarakat($username, $password)
    //     {
    //         $query=$this->db->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password' LIMIT 1");
    //         return $query;
    //     }

    //     function auth_admin($username, $password)
    //     {
    //         $query=$this->db->query("SELECT * FROM petugas WHERE username='$username' AND password='$password' LIMIT 1
    //         ");
    //         return $query;
    //     }

    public function simpan_db()
    {
        $data = array(
            'id_user' => '',
            'nama' => $this->input->post('namas'),
            'username' => $this->input->post('usernames'),
            'password' => $this->input->post('passwords'),

        );

        $this->db->insert('masyarakat', $data);
        header("Location:" . base_url() . 'Dashboard/data_user');
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

    public function view()
    {
        $data = $this->db->get('masyarakat');
        return $data->result();
    }

    public function view_row()
    {
        $data = $this->db->get('masyarakat');
        return $data->result();
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

    public function get_pengaduan()
    {   
        $nama = $this->session->userdata('nama');
        $query = $this->db->query("SELECT * FROM `pengaduan` WHERE nama= '$nama'");
        return $query->result_array();
    }

    //coba ajax
    // public function getAllOfc()
    // {
    //     $data = $this->db->get('petugas');
    //     return $data->result();
    // }
    // get data barang array
    public function get_dtUser()
    {
        $data = $this->db->get('masyarakat');
        return $data->result_array();
    }

    public function get_petugas()
    {
        $data = $this->db->get('petugas');
        return $data->result_array();
    }

    public function viewofc()
    {
        $data = $this->db->get('masyarakat');
        return $data->result();
    }

    public function viewrow_ofc()
    {
        $data = $this->db->get('petugas');
        return $data->result();
    }

    public function idPegaduan($idPengaduan)
    {
        $this->db->where("id_pengaduan", $idPengaduan);
        $query = $this->db->get('pengaduan');
        return $query->result();
    }

    // get id petugas untuk data edit
    public function getIDpetugas($id_petugas)
    {
        $this->db->where("id_petugas", $id_petugas);
        $query = $this->db->get('petugas');
        return $query->result();
    }

    // data edit petugas
    public function upd_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // data delete petugas
    function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    // public function save_dataofc()
    // {
    //     $data = array(
    //         'id_petugas' => '',
    //         'nama_petugas' => $this->input->post('nama'),
    //         'username' => $this->input->post('username'),
    //         'password' => $this->input->post('passwords'),
    //         'level' => $this->input->post('level'),

    //     );

    //     $this->db->insert('petugas', $data);
    //     header("Location:" . base_url() . 'Dashboard/data_ofc');
    // }

    public function get_ofc()
    {
        $data = $this->db->get('petugas');
        return $data->result();
    }

    public function count_ofc()
    {
        $data = $this->db->get('petugas');
        return $data->num_rows();
    }

    // hitung data berdasarkan status 0
    public function HitungData1()
    {
        $this->db->where('status', '0');
        return $this->db->count_all_results('pengaduan');
    }

    public function report()
    {
        $proof = $_FILES['files'];
        if ($proof = '') {
            // kosong
        } else {
            $config['upload_path'] = './assets/proof';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('files')) {
                echo "Gagal upload";
                die();
            } else {
                $proof = $this->upload->data('file_name');
            }
        }

        $doc = array(
            'id_pengaduan' => "",
            'nama' => $this->input->post('nama'),
            'tgl_pengaduan' => $this->input->post('tgl'),
            'isi_pengaduan' => $this->input->post('isi'),
            'file' => $proof,
            'status' => '0'
        );

        // $this->db->set('tgl_pengaduan', 'NOW()', FALSE);
        $this->db->insert('pengaduan', $doc);
        header('Location:' . base_url() . 'Dashboard/hasil_report');
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

    public function get_dtpengaduan()
    {
        $data = $this->db->get('pengaduan');
        return $data->result_array();
    }

    public function savetanggap($data)
    {
        $this->db->insert('tanggapan', $data);
        header("location",base_url().'Dashboard/pa_pengaduan');
    }

    function get_name()
    {
        # code...
        $query = $this->db->get('masyarakat');
        return $query->row();
    }

    public function get_data()
    {
        $query = $this->db->query('SELECT * FROM `petugas` ORDER BY `petugas`.`nama_petugas` ASC');
        return $query->result();
    }
}
