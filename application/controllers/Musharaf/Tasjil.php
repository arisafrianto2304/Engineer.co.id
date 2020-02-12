<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasjil extends CI_Controller {
	/**
	 * register admin
	 */

	public function index()
	{
        if (isset($_POST['signup'])) {
            if($_POST['password'] == $_POST['confirm_password']) {
                $email = $_POST['email']; // Get post email
                $password = $_POST['password']; // Get post password
                $this->load->model('Admin/Register_m'); //Panggil model Register_m
                // mengecek duplikat
                $cek_duplikat = $this->Register_m->Cek_Duplikat($email);
                if($cek_duplikat !=  TRUE) {
                    // upload data staff ke database
                    $this->Register_m->SignUp($email,$password); 
                    // alert jika sukses daftar
                    $alerts = array(
                        'status' => TRUE,
                        'jenis' => 'signup',
                        'keterangan' => 'sukses'
                    ); 
                    $this->template->load('Admin/Template/index','Admin/Content/register',$alerts);
                } else {
                    // alert jika terdapat duplikat
                    $alerts = array(
                        'status' => TRUE,
                        'jenis' => 'signup',
                        'keterangan' => 'duplikat'
                    ); 
                    $this->template->load('Admin/Template/index','Admin/Content/register',$alerts);
                } 
                 
            } else {
                // alert jika password dan confirm password tidak sama
                $alerts = array(
                    'status' => TRUE,
                    'jenis' => 'signup',
                    'keterangan' => 'password'
                ); 
                $this->template->load('Admin/Template/index','Admin/Content/register',$alerts);
            }
        } else {
            // page awal register
            $alerts = array(
                'status' => FALSE,
                'jenis' => 'signup'
            ); 
            $this->template->load('Admin/Template/index','Admin/Content/register',$alerts);
        }
	}
}
