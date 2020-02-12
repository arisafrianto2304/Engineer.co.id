<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DropCV extends CI_Controller {

    function __construct(){
        // Call the Model constructor
        parent::__construct(); 
        $this->load->model('DropCV_m');
    }

	public function index()
	{
        $content = array(
            'title' => 'Drop CV',
            'description' => 'Silahkan Drop Curriculum Vitae anda pada form dibawah ini.',
            'error' => ''
        );
        $this->template->load('Template/index1','Content/drop-cv',$content);
    }

    public function add()
    {
        $contact = $_POST['contact']; // Get post contact
        $email = $_POST['email']; // Get post email
        $kualifikasi = $_POST['kualifikasi']; // Get post kualifikasi
        $bidang = $_POST['bidang']; //Get Post enum Bidang
        $gaji = $_POST['gaji']; // Get post gaji
        $name = $kualifikasi.'_'.$contact.'_'.$bidang; //Set File Name

        $data = array (
            'kontak' => $contact,
            'email' => $email,
            'bidang' => $bidang,
            'kualifikasi' => $kualifikasi,
            'gaji' => $gaji,
            'curriculum_vitae' => $name
        );

        $curriculum_vitae = $this->DropCV_m->upload('cv',$name);
        // echo $curriculum_vitae['result'];
        // echo $curriculum_vitae['error'];
        // jika cv berhasil di upload ke folder uploads
        if($curriculum_vitae['result'] == "success"){ 
            // Panggil function save yang ada di Model untuk menyimpan nama data ke database
            $this->DropCV_m->save($data);
            redirect(site_url('SuccessSubmitCv'),'refresh');
        } else {
            $content = array(
            'title' => 'Drop CV',
            'description' => 'Silahkan Drop Curriculum Vitae anda pada form dibawah ini.',
            'error' => '*Upload gagal - Periksa kembali file'
            );
            $this->template->load('Template/index1','Content/drop-cv',$content);
        }
    }
}
