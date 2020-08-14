<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_system');
    }

    public function index()
    {
        if ($this->session->userdata('status') == 'login') {
            redirect('Dashboard/home');
        } else if ($this->session->userdata('status') != 'login') {
            redirect('Dashboard/homeuser');
        }
    }

    public function home()
    {
        $data['title'] = "Dashboard";
        $this->load->view('base', $data);
    }

    public function login()
    {
        $data['title'] = "Form Login";
        $this->load->view('login', $data);
    }

    public function register()
    {
        $data['title'] = "Register";
        $data['masyarakat'] = $this->model_system->get_user();
        $data['c_masyarakat'] = $this->model_system->count_user();
        $this->load->view('reg', $data);
    }

    public function homeuser()
    {
        $data['title'] = "Form Pengaduan";
        $this->load->view('homeuser', $data);
    }

    public function simpan_data()
    {
        $this->model_system->simpan_db();
    }

    public function action_login()
    {
        $usernames = $this->input->post('user');
        $passwords = $this->input->post('pass');
        $where = array(
            'username' => $usernames,
            'password' => $passwords
        );
        $cek = $this->model_system->cek_login('masyarakat', $where)->num_rows();

        if ($cek > 0) {
            $data_session = array(
                'username' => $usernames,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);

            if ($this->session->userdata('status') == 'login') {
                // echo "Berhasil"
                header("Location:" . base_url() . 'Dashboard/homeuser');
            } else {
                echo "Login Gagal";
            }
        } else {
?>
            <script>
                alert("Username or Password Incorect");
                window.location.href = "/ci_boots/Dashboard/login";
            </script>
<?php
        }
    }

    function logout()
    {
        $this->session->set_destroy();
        redirect(base_url());
    }

    function edit($id_user)
    {
        $where = array('id_user' => $id_user);
        $data['masyarakat'] = $this->model_system->edit_data($where, 'masyarakat')->result();
        $this->load->view('edit_user', $data);
    }

    function update()
    {
        $id_user = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $pass = $this->input->post('password');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $pass
        );

        $this->model_system->update_data($id_user, $data);
        redirect('Dashboard/register');
    }

    function hapus($id_user)
    {
        $where = array('id_user' => $id_user);
        $this->model_system->hapus_data($where, 'masyarakat');
        redirect('Dashboard/register');
    }

    public function save_report()
    {
        $this->model_system->report();
        $this->load->view('hasil_report');
    }
}
