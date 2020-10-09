<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_system');
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('base', $data);
        // if ($this->session->userdata('status') == 'login') {
        //     redirect('Dashboard/home');
        // } else if ($this->session->userdata('status') != 'login') {
        //     redirect('Dashboard/homeuser');
        // }
    }

    public function register()
    {
        $data['title'] = "Register";
        $this->load->view('reg', $data);
    }

    public function regmin()
    {
        $data['title'] = "Register";
        $data['petugas'] = $this->model_system->get_ofc();
        $data['c_petugas'] = $this->model_system->count_ofc();
        $this->load->view('regmin', $data);
    }

    // untuk proses login
    public function aksi_login()
    {
        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => $passwords
        );
        $cek = $this->model_system->cek_login($where)->num_rows();

        if ($cek > 0) {
            $role = $this->model_system->cek_login($where)->row(0)->level;
            if ($role == 'admin') {
                $rule = $this->model_system->cek_login($where)->row(0)->level;
                $nama_petugas = $this->model_system->cek_login($where)->row(0)->nama_petugas;
                $data_session = array(
                    'nama_petugas' => $nama_petugas,
                    'username' => $usernames,
                    'level' => $rule,
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                if ($this->session->userdata('status') == 'login') {
                    header("Location:" . site_url() . "/Dashboard/pa_pengaduan");
                } else {
                    header("Location:" . site_url() . "/Dashboard/login");
                }
            } elseif ($role == 'petugas') {
                $id = $this->model_system->cek_login($where)->row(0)->id_petugas;
                $rule = $this->model_system->cek_login($where)->row(0)->level;
                $nama_petugas = $this->model_system->cek_login($where)->row(0)->nama_petugas;
                $data_session = array(
                    'id_petugas' => $id,
                    'nama_petugas' => $nama_petugas,
                    'username' => $usernames,
                    'level' => $rule,
                    'status' => 'login'
                );
                $this->session->set_userdata($data_session);
                if ($this->session->userdata('status') == 'login') {
                    header("Location:" . site_url() . "/Dashboard/home_ofc");
                } else {
                    header("Location:" . site_url() . "/Dashboard/login");
                }
            } else {
                $nama = $this->model_system->cek_login($where)->row(0)->nama;
                $id = $this->model_system->cek_login($where)->row(0)->id_user;
                $data_session = array(
                    'usernama' => $usernames,
                    'status' => 'login',
                    'nama' => $nama,
                    'id_user' => $id
                );
                $this->session->set_userdata($data_session);
                if ($this->session->userdata('status') == 'login') {
                    header("Location:" . site_url() . "/Dashboard/homeuser");
                } else {
                    header("Location:" . site_url() . "/Dashboard/login");
                }
            }
        } else {
            header("Location:" . base_url() . "");
        }
    }

    public function login()
    {
        $data['title'] = "Form Login";
        $this->load->view('login', $data);
    }

    public function home()
    {
        $data['title'] = "Dashboard";
        $this->load->view('base', $data);
    }

    public function home_admin()
    {
        $data['title'] = "Dashboard Admin";
        if ($num = $this->model_system->HitungData1()) {
            $data['hasil'] = $num;
        }
        $this->load->view('admin-home', $data);
    }

    public function home_ofc()
    {
        $data['title'] = "Dashboard Officer";
        $this->load->view('home_ofc', $data);
    }

    // public function dataofc()
    // {
    //     $data['result'] = $this->model_system->get_data();
    //     $this->load->view('data_ofc',$data);
    // }

    public function homeuser()
    {
        $this->load->helper('url');
        $data['title'] = "Dashboard User";
        $this->load->view('homeuser', $data);
    }

    public function report_form()
    {
        $this->load->helper('url');
        $data['title'] = "Form Pengaduan";
        $this->load->view('report_form', $data);
    }

    public function pu()
    {
        $data['title'] = "Data Pengaduan";
        $this->load->view('user/pageuser', $data);
    }

    public function data_pengaduan()
    {
        $datapengaduan = $this->model_system->get_pengaduan();
        $no = 1;
        foreach ($datapengaduan as $value) {
            $tbody = array();
            $tbody[] = $no++;
            $tbody[] = $value['nama'];
            $tbody[] = $value['tgl_pengaduan'];
            $tbody[] = $value['isi_pengaduan'];
            $img = "<img style='width: 100%;' src='http://localhost/ci_boots/assets/proof/" . $value['file'] . "' ?>";
            $tbody[] = $img;
            $tbody[] = $value['status'];
            $btn = "<button type='button' class='btn btn-primary btn-sm editbutton' name='editbtn' style='margin-bottom: 10px;' data-toggle='modal' id=" . $value['id_pengaduan'] . ">
            				<span class='icon text-white'>
                                <i class='fas fa-edit'></i>
                                
                            </span>	

            		</button>";
            // <button	 type='button' data-toggle='modal' name='deletebtn' id=" . $value['id_pengaduan'] . " class='btn btn-danger btn-sm deletebtn'>
            // 			<span class='icon text-white'>
            // 				<i class='fas fa-trash-alt'></i>
            // 			</span>

            // </button>";
            $tbody[] = $btn;
            $data[] = $tbody;
        }
        if ($datapengaduan) {
            echo json_encode(array('data' => $data));
        } else {
            echo json_encode(array('data' => 0));
        }
    }

    public function get_pegaduan()
    {
        $output = array();
        $data = $this->model_system->getIDpegaduan($_POST["id_petugas"]);
        foreach ($data as $row) {
            $output['nama_petugas'] = $row->nama_petugas;
            $output['username'] = $row->username;
            // $output['password'] = $row->password;
            // $output['telp'] = $row->telp;
            $output['level'] = $row->level;
        }
        echo json_encode($output);
    }

    public function upload_image()
    {
        if (isset($_FILES['user_image'])) {
            $extension = explode('.', $_FILES['user_image']['name']);
            $new_name = rand() . '.' . $extension[1];
            $destination = './assets/img/' . $new_name;
            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
            return $new_name;
        }
    }


    // edit data petugas
    public function edit_pengaduan()
    {
        if ($_POST["action"] == "edit") {
            $idpetugas = $this->input->post('idptgs');
            $data = array(
                'nama_petugas' => $this->input->post('nmptgs'),
                'username' => $this->input->post('usrnm'),
                // 'password' => md5($this->input->post('pwptgs')),
                // 'telp' => $this->input->post('nhpptgs'),
                'level' => $this->input->post('rlptgs')
            );

            $where = array(
                'id_petugas' => $idpetugas
            );

            $this->model_system->upd_data($where, $data, 'petugas');
            echo 'Data Updated';
        }
    }

    public function data_user()
    {
        $data['title'] = "Data User";
        $data['masyarakat'] = $this->model_system->get_user();
        $data['c_masyarakat'] = $this->model_system->count_user();
        $this->load->view('data_user', $data);
    }

    public function simpan_data()
    {
        $this->model_system->simpan_db();
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
        redirect('Dashboard/data_user');
    }

    function hapus($id_user)
    {
        $where = array('id_user' => $id_user);
        $this->model_system->hapus_data($where, 'masyarakat');
        redirect('Dashboard/data_user');
    }

    public function cetak_pdf()
    {
        ob_start();
        $data['masyarakat'] = $this->model_system->get_user();
        $data['c_masyarakat'] = $this->model_system->count_user();
        $this->load->view('preview', $data);

        $html = ob_get_contents();
        ob_end_clean();

        // require './assets/html2pdf/autoload.php';
        include './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');
        $pdf->WriteHTML($html);

        $pdf->Output('data_' . date('d-m-Y') . '.pdf', 'D');
    }

    public function preview()
    {
        $data['masyarakat'] = $this->model_system->get_user();
        $data['c_masyarakat'] = $this->model_system->count_user();
        $data['masyarakat'] = $this->model_system->view_row();
        $this->load->view('preview', $data);
    }

    public function cetak_xls()
    {
        $data = $this->model_system->get_user();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Username');

        $rexcel = 2;
        foreach ($data as $row) {
            $sheet->setCellValue('A' . $rexcel, $row->id_user);
            $sheet->setCellValue('B' . $rexcel, $row->nama);
            $sheet->setCellValue('C' . $rexcel, $row->username);
            $rexcel++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'laporan-excel';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    //tampildata 
    public function ofc()
    {
        $data['title'] = "Data Officer";
        $this->load->view('ofc/officer', $data);
    }

    public function data_petugas()
    {
        $datapetugas = $this->model_system->get_petugas();
        $no = 1;
        foreach ($datapetugas as $value) {
            $tbody = array();
            $tbody[] = $no++;
            $tbody[] = $value['nama_petugas'];
            $tbody[] = $value['username'];
            $tbody[] = $value['level'];
            $btn = "<button type='button' class='btn btn-primary btn-sm editbutton' name='editbtn' data-toggle='modal' id=" . $value['id_petugas'] . ">
							<span class='icon text-white'>
								<i class='fas fa-edit'></i>
							</span>		
					</button>
					<button	 type='button' data-toggle='modal' name='deletebtn' id=" . $value['id_petugas'] . " class='btn btn-danger btn-sm deletebtn'>
								<span class='icon text-white'>
									<i class='fas fa-trash-alt'></i>
								</span>
								
					</button>";
            $tbody[] = $btn;
            $data[] = $tbody;
        }
        if ($datapetugas) {
            echo json_encode(array('data' => $data));
        } else {
            echo json_encode(array('data' => 0));
        }
    }

    //ajax insert data petugas
    public function insert_petugas()
    {
        if ($_POST["action"] == "Add") {
            $data = array(
                'id_petugas' => null,
                'nama_petugas' => $this->input->post('nmptgs'),
                'username' => $this->input->post('usrnm'),
                'password' => md5($this->input->post('pwptgs')),
                'level' => $this->input->post('rlptgs')
            );
            $this->db->insert('petugas', $data);
            echo 'Data Inserted';
        }
    }

    // get id pengaduan
    public function getIdPengaduan()
    {
        $output = array();
        $data = $this->model_system->idPegaduan($_POST["id_pengaduan"]);
        foreach ($data as $row) {
            $output['id_pengaduan'] = $row->id_pengaduan;
        }
        echo json_encode($output);
    }

    public function getIdPetugas()
    {
        $output = array();
        $data = $this->model_system->getIDpetugas($_POST["id_petugas"]);
        foreach ($data as $row) {
            $output['id_petugas'] = $row->id_petugas;
        }
        echo json_encode($output);
    }

    public function get_petugas()
    {
        $output = array();
        $data = $this->model_system->getIDpetugas($_POST["id_petugas"]);
        foreach ($data as $row) {
            $output['nama_petugas'] = $row->nama_petugas;
            $output['username'] = $row->username;
            // $output['password'] = $row->password;
            // $output['telp'] = $row->telp;
            $output['level'] = $row->level;
        }
        echo json_encode($output);
    }

    // edit data petugas
    public function edit_petugas()
    {
        if ($_POST["action"] == "edit") {
            $idpetugas = $this->input->post('idptgs');
            $data = array(
                'nama_petugas' => $this->input->post('nmptgs'),
                'username' => $this->input->post('usrnm'),
                // 'password' => md5($this->input->post('pwptgs')),
                // 'telp' => $this->input->post('nhpptgs'),
                'level' => $this->input->post('rlptgs')
            );

            $where = array(
                'id_petugas' => $idpetugas
            );

            $this->model_system->upd_data($where, $data, 'petugas');
            echo 'Data Updated';
        }
    }

    //ajax delete data petugas
    public function hapus_petugas()
    {
        $id_petugas = $_POST['id_petugas'];
        $where = array(
            'id_petugas' => $id_petugas
        );

        $this->model_system->delete_data($where, 'petugas');
    }

    public function pa_dtuser()
    {
        // $this->load->helper('url');
        $data['title'] = "Data User";
        $this->load->view('data_user', $data);
    }

    public function report()
    {
        // $this->load->helper('url');
        $data['title'] = "Data Report";
        $this->load->view('ofc/dtreport', $data);
    }

    public function dtUser()
    {
        $datauser = $this->model_system->get_dtUser();
        $no = 1;
        foreach ($datauser as $value) {
            $tbody = array();
            $tbody[] = $no++;
            $tbody[] = $value['nama'];
            $tbody[] = $value['username'];
            // $tbody[] = $value['password'];
            $btn = "<button type='button' class='btn btn-primary btn-sm editbutton' name='editbtn' data-toggle='modal' id=" . $value['id_user'] . ">
							<span class='icon text-white'>
								<i class='fas fa-edit'></i>
                            </span>	

                    </button>
                    <button	 type='button' data-toggle='modal' name='deletebtn' id=" . $value['id_user'] . " class='btn btn-danger btn-sm deletebtn'>
								<span class='icon text-white'>
									<i class='fas fa-trash-alt'></i>
								</span>
								
					</button>";
            $tbody[] = $btn;
            $data[] = $tbody;
        }
        if ($datauser) {
            echo json_encode(array('data' => $data));
        } else {
            echo json_encode(array('data' => 0));
        }
    }

    public function cetakOfc_pdf()
    {
        ob_start();
        $data['petugas'] = $this->model_system->get_ofc();
        $data['c_petugas'] = $this->model_system->count_ofc();
        $this->load->view('ofc/previewofc', $data);

        $html = ob_get_contents();
        ob_end_clean();

        require './assets/html2pdf/autoload.php';
        // include './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');
        $pdf->WriteHTML($html);

        $pdf->Output('data_' . date('d-m-Y') . '.pdf', 'D');
    }

    public function previewOfc()
    {
        $data['petugas'] = $this->model_system->get_ofc();
        $data['c_petugas'] = $this->model_system->count_ofc();
        $data['petugas'] = $this->model_system->viewrow_ofc();
        $this->load->view('ofc/previewofc', $data);
    }

    public function cetakUser_xls()
    {
        $data = $this->model_system->get_ofc();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ID Petugas');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Username');
        $sheet->setCellValue('D1', 'Level');

        $rexcel = 2;
        foreach ($data as $row) {
            $sheet->setCellValue('A' . $rexcel, $row->id_petugas);
            $sheet->setCellValue('B' . $rexcel, $row->nama_petugas);
            $sheet->setCellValue('C' . $rexcel, $row->username);
            $sheet->setCellValue('C' . $rexcel, $row->level);
            $rexcel++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'DataPetugas-excel';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }


    public function pa_pengaduan()
    {
        // $this->load->helper('url');
        $data['title'] = "Data Pengaduan";
        $this->load->view('ofc/dtpengaduan', $data);
    }

    public function set_pengaduan()
    {
        $datapengaduan = $this->model_system->get_dtpengaduan();
        $no = 1;
        foreach ($datapengaduan as $value) {
            $tbody = array();
            $tbody[] = $no++;
            // $tbody[] = $value['id_pengaduan'];
            $tbody[] = $value['tgl_pengaduan'];
            $tbody[] = $value['isi_pengaduan'];
            $img = "<img style='width: 100%;' src='http://localhost/ci_boots/assets/proof/" . $value['file'] . "' ?>";
            $tbody[] = $img;
            $tbody[] = $value['status'];
            $btn = "<button type='button' class='btn btn-primary btn-sm editbutton' name='editbtn' data-toggle='modal' id=" . $value['id_pengaduan'] . ">
                    <span class='icon text-white'>
                        <i class='fas fa-edit'></i> Respons
                    </span>		
                    </button>";
            $tbody[] = $btn;
            $data[] = $tbody;
        }
        if ($datapengaduan) {
            echo json_encode(array('data' => $data));
        } else {
            echo json_encode(array('data' => 0));
        }
    }

    //ajax insert data tanggapan admin
    public function insert_report()
    {
        // if ($_POST["action"] == "Add") {
            $idAduan = $this->input->post('idAduan');
        // $idPetugas = $this->session->userdata('id_petugsa');
        $data = array(
            'id_tanggapan' => NULL,
            'id_pengaduan' => $this->input->post('idAduan'),
            'tgl_tanggapan' => $this->input->post('tgltanggapan'),
            'tanggapan' => $this->input->post('tanggapan'),
            'id_petugas' => $this->input->post('id_petugas')
        );


        $data2 = array(
            'status' => 'selesai' 
        );

        $where = array(
            'id_pengaduan' => $this->input->post('idAduan'),
        );

        // insert ke tabel tanggapan
        $this->db->insert('tanggapan', $data);
        // update data pengaduan
        $this->db->where('id_pengaduan',$idAduan);
        $this->db->update('pengaduan', $data2, $where);

        //     echo 'Data Inserted';
        // }
    }

    // public function simpanData()
    // {
    //     $data = $this->model_system->inputData();
    //     echo json_encode($data);
    // }

    // public function updateOfc()
    // {
    //     $data = $this->model_system->updateData();
    //     echo json_encode($data);
    // }

    // public function hapusOfc()
    // {
    //     $data = $this->model_system->hapusData();
    //     echo json_encode($data);
    // }

    // public function data_ofc(){
    //     $data['title'] = "Data Officer";
    //     $data['petugas'] = $this->model_system->get_ofc();
    //     $data['c_petugas'] = $this->model_system->count_ofc();
    //     $this->load->view('data_ofc', $data);
    // }

    // public function save_ofc()
    // {
    //     $this->model_system->save_dataofc();
    // }

    // function add_ofc(){
    //     $data = array(
    //         'nama_petugas'  => $this->input->post('nama'),
    //         'username' => $this->input->post('username'),
    //         'password' => $this->input->post('password'),
    //         'level' => $this->input->post('level'),

    //     );
    //     $this->model_system->add_dataofc($data);
    //     $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    //     redirect('Dashboard/data_ofc');
    // }

    

    function edit_ofc($id_petugas)
    {
        $where = array('id_petugas' => $id_petugas);
        $data['petugas'] = $this->model_system->edit_dataofc($where, 'petugas')->result();
        $this->load->view('edit_ofc', $data);
    }

    function update_ofc()
    {
        $id_petugas = $this->input->post('id_petugas');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'nama_petugas' => $nama,
            'username' => $username,
            'password' => $pass,
            'level' => $level

        );

        $this->model_system->update_dataofc($id_petugas, $data);
        redirect('Dashboard/data_ofc');
    }

    // function update_ofc(){
    //     $id = $this->input->post('id_petugas');
    //        $data = array(
    //            'nama_petugas'  => $this->input->post('nama'),
    //            'username' => $this->input->post('username'),
    //            'password' => $this->input->post('password'),
    //            'level' => $this->input->post('level')
    //        );
    //        $this->model_system->ubah($data,$id_petugas);
    //        $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    //        redirect('Dashboard/data_ofc');
    //    }

    function hapus_ofc($id_petugas)
    {
        $where = array('id_petugas' => $id_petugas);
        $this->model_system->hapus_dataofc($where, 'petugas');
        redirect('Dashboard/data_ofc');
    }

    public function save_report()
    {
        $this->model_system->report();
        $this->load->view('user/pageuser');
    }

    public function hasil_report()
    {
        $data['title'] = "Hasil Report";
        $this->load->view('user/pageuser', $data);
    }

    function logout()
    {
?>
        <script>
            alert("Are you sure want to logout?");
            window.location.href = "/ci_boots/Dashboard/login";
        </script>
<?php
        // $this->session->set_destroy();
        // redirect(base_url());
    }
}
