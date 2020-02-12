<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    function __construct(){
        // Call the Model constructor
        parent::__construct(); 
        $this->load->model('DropCV_m');
    }

	public function index()
	{
        $content = array(
            'title' => 'Kontak Engineer',
            'description' => 'Kontak Engineer',
        );
		$this->template->load('Template/index1','Content/contact-us',$content);
    }
    
    public function pesan()
    {
        $name = $_POST['nama_kontak']; // Get post contact
        $email = $_POST['email_kontak']; // Get post email
        $subject = $_POST['subjek_kontak']; // Get post kualifikasi
        $message = $_POST['pesan_kontak']; //Get Post enum Bidang

        $dataKontak = array (
            'nama_kontak' => $name,
            'email_kontak' => $email,
            'subjek_kontak' => $subject,
            'pesan_kontak' => $message,
        );

        $this->DropCV_m->saveKontak($dataKontak);
        redirect(site_url('Contact'),'refresh');
    }
}
