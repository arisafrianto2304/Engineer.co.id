<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TasjilAldukhul extends CI_Controller {
	/**
	 * login admin
	 */

	public function index()
	{
		if (isset($_POST['signin'])) {
            $email = $_POST['email']; // Get post email
			$password = $_POST['password']; // Get post password
            $this->load->model('Admin/Login_m'); //Panggil model Register_m
            //konfigurasi login admin
            $confirm = $this->Login_m->SignIn($email,$password);
            if($confirm ==  1) {
				$_SESSION['main_data']['login'] = TRUE;
				redirect('Musharaf/LawhatAlqiada','refresh');
            } else if($confirm ==  2) {
                // alert jika terdapat duplikat
                $alerts = array(
                    'status' => TRUE,
                    'jenis' => 'signin',
                    'keterangan' => 'password'
                ); 
                $this->template->load('Admin/Template/index','Admin/Content/login',$alerts);
            } else if($confirm ==  3) {
                // alert jika terdapat duplikat
                $alerts = array(
                    'status' => TRUE,
                    'jenis' => 'signin',
                    'keterangan' => 'email'
                ); 
                $this->template->load('Admin/Template/index','Admin/Content/login',$alerts);
            } else {
				// alert jika terdapat duplikat
                $alerts = array(
                    'status' => TRUE,
                    'jenis' => 'signin',
                    'keterangan' => 'akun'
                ); 
                $this->template->load('Admin/Template/index','Admin/Content/login',$alerts);
			}  
        } else {
            // page awal register
            $alerts = array(
                'status' => FALSE,
                'jenis' => 'signin'
            ); 
			$this->template->load('Admin/Template/index','Admin/Content/login',$alerts);
        }
	}
}
