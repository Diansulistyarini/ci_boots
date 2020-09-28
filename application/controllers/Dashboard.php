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

    // proses login
//     public function auth()
//  {
//   $username = $this->input->post('username');
//   $password = $this->input->post('password');
//   $cek_admin=$this->model_system->auth_admin($username, $password);
//   if($cek_admin->num_rows() > 0){
//    $data=$cek_admin->row_array();
//    $this->session->set_userdata('masuk',TRUE);
//     if($data['level']=='admin'){
//      $this->session->set_userdata('akses','admin');
//      $this->session->set_userdata('ses_username',$data['username']);
//      $this->session->set_userdata('ses_password',$data['password']);
//      redirect('Dashboard/home_admin');
//     }else{ 
//                     $this->session->set_userdata('akses','petugas');
//                     $this->session->set_userdata('ses_username',$data['username']);
//                     $this->session->set_userdata('ses_password',$data['password']);
//                     redirect('Dashboard/home_ofc');
//                  }
//   }else{ 
//    $cek_masyarakat=$this->model_system->auth_masyarakat($username,$password);
//    if($cek_masyarakat->num_rows() > 0){
//      $data=$cek_masyarakat->row_array();
//    $this->session->set_userdata('masuk',TRUE);
//      $this->session->set_userdata('akses','masyarakat');
//      $this->session->set_userdata('ses_username',$data['username']);
//      $this->session->set_userdata('ses_password',$data['password']);
//      redirect('Dashboard/homeuser');
//    }else{  
//      redirect('Dashboard/login');
//    }
//   }

//  }

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
                 header("Location:" . site_url() . "/Dashboard/home_admin");
             } else {
                 header("Location:" . site_url() . "/Dashboard/login");
             }
         } elseif ($role == 'petugas') {
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
                 header("Location:" . site_url() . "/Dashboard/home_ofc");
             } else {
                 header("Location:" . site_url() . "/Dashboard/login");
             }
         } else {
             $nama = $this->model_system->cek_login($where)->row(0)->nama;
             $nik = $this->model_system->cek_login($where)->row(0)->nik;
             $data_session = array(
                 'usernama' => $usernames,
                 'status' => 'login',
                 'nama_user' => $nama,
                 'nik' => $nik
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
	// public function aksi_login() {
	// 	$usernames = $this->input->post('user');
	// 	$passwords = $this->input->post('pass');
	// 	$where = array(
	// 		'username' => $usernames,
	// 		'password' => $passwords
	// 	);
	// 	$cek = $this->model_system->cek_login($where)->num_rows();
		
	// 	if ($cek>0) {
	// 		$role = $this->model_system->cek_login($where)->row(0)->level;
	// 		if ($role == 'admin' || $role == 'petugas') {
	// 			$rule = $this->model_system->cek_login($where)->row(0)->level;
	// 			$nama_petugas = $this->model_system->cek_login($where)->row(0)->nama_petugas;
	// 			$data_session = array(
    //                 'nama_petugas' => $nama_petugas,
    //                 'username' => $usernames,
    //                 'level' => $rule,
    //                 'status' => 'login'
	// 			);
	// 			$this->session->set_userdata($data_session);
	// 			if ($this->session->userdata('status')=='login') {
	// 				header("Location:".site_url()."/Dashboard/home_admin");
	// 			} else {
	// 				header("Location:".site_url()."/Dashboard/home_ofc");
	// 			}
	// 		} else {
	// 			$nama = $this->model_system->cek_login($where)->row(0)->nama;
	// 			// $nik = $this->model_system->cek_login($where)->row(0)->nik;
	// 			$data_session = array(
	// 				'username' => $usernames,
	// 				'status' => 'login',
	// 				'nama' => $nama
	// 				// 'nik' => $nik
	// 			);
	// 			$this->session->set_userdata($data_session);
	// 			if ($this->session->userdata('status')=='login') {
	// 				header("Location:".site_url()."/Dashboard/homeuser");
	// 			} else {
	// 				echo 'gagal login';
	// 			}
	// 		}
    //     } else 
    //     {
    //         // header("Location:".base_url()."");
    //         
	// 	}
	// }

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
        if($num = $this->model_system->HitungData1())
		{
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

    // //cb Ajax
    public function data_ofc()
    {
        $data['title'] = "Data Officer";
        $this->load->view('ofc/dataOfc', $data);
    }

    public function tampilkanData()
    {
        $data = $this->model_system->getAllOfc();
        echo json_encode($data);
    }

    public function simpanData()
    {
        $data = $this->model_system->inputData();
        echo json_encode($data);
    }

    public function updateOfc()
    {
        $data = $this->model_system->updateData();
        echo json_encode($data);
    }

    public function hapusOfc()
    {
        $data = $this->model_system->hapusData();
        echo json_encode($data);
    }

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

    // AJAX
    // ajax show data
    // public function data_ofc()
    // {
    //     $dataOfc = $this->model_system->get_dataOfc();
    //     foreach ($dataOfc as $value) {
	// 		$tbody = array();
	// 		$tbody[] = $value['nama_petugas'];
    //         $tbody[] = $value['username'];
    //         $tbody[] = $value['password'];  
    //         $tbody[] = $value['level'];
	// 		$btn = "<button type='button' class='btn btn-primary btn-icon-split editbtn' name='editbtn' data-toggle='modal' id=" . $value['id_petugas'] . " 	style='padding-right: 6%;'>
	// 					<span class='icon text-white'>
	// 						<i class='fas fa-edit'></i>
	// 					</span>
	// 					<span class='text'>Edit Data</span>
	// 					</button>
	// 					<button type='button' data-toggle='modal' name='deletebtn' id=" . $value['id_petugas'] . " class='btn btn-danger btn-icon-split mt-2 deletebtn'>
	// 						<span class='icon text-white'>
	// 							<i class='fas fa-trash'></i>
	// 						</span>
	// 						<span class='text'>Delete Data</span>
	// 					</button>";
	// 		$tbody[] = $btn;
	// 		$data[] = $tbody;
	// 	}
	// 	if ($dataOfc) {
	// 		echo json_encode(array('data' => $data));
	// 	} else {
	// 		echo json_encode(array('data' => 0));
	// 	}
    // }

    // // ajax add data
    // // add goods
	// public function addData()
	// {
	// 	if ($_POST["action"] == "Add") {
	// 		$data = array(
	// 			'id_petugas' => "",
	// 			'nama' => $this->input->post('nama'),
	// 			'username' => $this->input->post('username'),
	// 			'password' => $this->input->post('password'),
	// 			'level' => $this->input->post('level')
	// 		);
	// 		$this->db->insert('petugas', $data);
	// 		echo 'Data Inserted';
	// 	}
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
        $this->load->view('hasil_report');
    }

    public function hasil_report()
    {
        $data['title'] = "Hasil Report";
        $this->load->view('hasil_report', $data);
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
