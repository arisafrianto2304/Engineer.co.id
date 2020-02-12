<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

    function __construct(){
        // Call the Model constructor
        parent::__construct(); 
        $this->load->model('DropCV_m');
    }

	public function index()
	{
        $content = array(
            // 'title' => 'Lowongan Pekerjaan',
            'description' => 'Kami akan membantu menemukan orang yang tepat untuk perusahaan anda. Lengkapi deskripsi dan spesifikasi untuk perusahaan anda',
        );
		$this->template->load('Template/index1','Content/jobs1',$content);
    }
    
    public function add() 
    {
        $namaperusahaan = $_POST['namaperusahaan']; // Get post nama Perusahaan
        $kualifikasi = $_POST['kualifikasi']; // Get post Kualifikasi
        $bidang_pekerjaan = $_POST['bidang_pekerjaan']; // Get post Bidang Pekerjaan
        $deskripsi = $_POST['deskripsi']; // Get post Deskripsi

        $dataRequest = array (
            'namaperusahaan' => $namaperusahaan,
            'kualifikasi' => $kualifikasi,
            'bidang_pekerjaan' => $bidang_pekerjaan,
            'deskripsi' => $deskripsi,
        );

        $this->DropCV_m->saveRequest($dataRequest);
        redirect(site_url('SuccessSubmitRequest'),'refresh');
    }
}
