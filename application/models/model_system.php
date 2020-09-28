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

    //coba ajax
    public function getAllOfc()
    {
        $data = $this->db->get('petugas');
        return $data->result();
    }

    public function inputData()
    {
        $data = [
            // "id_petugas" => '',
            "nama_petugas" => $this->input->post('nama_petugas', true),
            "username" => $this->input->post('username', true), 
            "password" => $this->input->post('password', true),
            "level" => $this->input->post('level', true)

        ];
        return $this->db->insert('petugas', $data);
        redirect('Dashboard/tampilkanData');

    }
    
    function updateData()
    {
        $id = $this->input->post('id_petugas'); 
        $nama_petugas = $this->input->post('nama_petugas', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $level = $this->input->post('level', true);
        $this->db->set('nama_petugas', $nama_petugas);
        $this->db->set('username', $username);
        $this->db->set('level', $level);
        $this->db->set('password', $password);
        $this->db->where('id_petugas', $id);
        return $this->db->update('petugas');
        redirect('Dashboard/tampilkanData');

    }
    
    public function hapusData()
    {
        $id_petugas = $this->input->post('id_petugas');
        $this->db->where('id_petugas', $id_petugas);
        return $this->db->delete('petugas');
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

    // function add_dataofc($data)
    // {
    //     $this->db->insert('petugas', $data);
    //     return TRUE;
    // }

    // get data data
    public function get_dataOfc()
    {
        $data = $this->db->get('petugas');
        return $data->result_array();
    }

    function edit_dataofc($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_dataofc($id_petugas, $data)
    {
        $this->db->set($data);
        $this->db->where('id_petugas', $id_petugas);
        $this->db->update('petugas');
    }

    function hapus_dataofc($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
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
