<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TalabEamal extends CI_Controller {
	/**
	 * Job Seeker page admin
	 */

    public function __construct()
    {
        parent::__construct();
        if ($_SESSION['main_data']['login'] != TRUE) {
            redirect('Musharaf/TasjilAldukhul','refresh');
        }
    }

	public function index()
	{
        $this->load->model('Admin/Dashboard_m'); //memanggil model dashboard
        // menaruh semua isi database dalam array
        $data = array();
        $data['jobvacancy'] = $this->Dashboard_m->JobVacancy_R(); //memindahkan isi datatbase job vacancy
        // $data['jobseeker'] = $this->Dashboard_m->JobSeeker_R(); //memindahkan isi datatbase job seeker
        $data['company'] = $this->Dashboard_m->Company_R(); //memindahkan isi datatbase company
        $data['staff'] = $this->Dashboard_m->Staff_R($_SESSION['main_data']['id']); //memindahkan isi datatbase company
        $data['jobseeker'] = $this->Dashboard_m->JobSeeker_R(); //memindahkan isi datatbase job seeker
        foreach ($data['jobseeker'] as $jobseeker) {
            // Konversi nilai data kualifikasi dari database untuk ditampilkan di view
            if ($jobseeker->kualifikasi=="sipil") {
                $jobseeker->kualifikasi = "Teknik Sipil";
            }
            else if ($jobseeker->kualifikasi=="informatika") {
                $jobseeker->kualifikasi = "Teknik Informatika";
            }
            else if ($jobseeker->kualifikasi=="mesin") {
                $jobseeker->kualifikasi = "Teknik Mesin";
            }

            // Konversi nilai data bidang dari database untuk ditampilkan di view

            if ($jobseeker->Bidang=="PRO") {
                $jobseeker->Bidang="Programmer";
            }
            else if ($jobseeker->Bidang=="SA") {
                $jobseeker->Bidang="Sistem Analisis";
            }
            else if ($jobseeker->Bidang=="NA") {
                $jobseeker->Bidang="Network Administrator";
            }
            else if ($jobseeker->Bidang=="KERP") {
                $jobseeker->Bidang="Konsultan ERP";
            }
            else if ($jobseeker->Bidang=="GD") {
                $jobseeker->Bidang="Game Developer";
            }
            else if ($jobseeker->Bidang=="KONS") {
                $jobseeker->Bidang="Konsultan ERP";
            }
            else if ($jobseeker->Bidang=="ProyekPembangunan") {
                $jobseeker->Bidang="Proyek/Pembangunan";
            }
            else if ($jobseeker->Bidang=="IK") {
                $jobseeker->Bidang="Insinyur Konstruksi";
            }
            else if ($jobseeker->Bidang=="PB") {
                $jobseeker->Bidang="Pemeliharaan Bangunan";
            }
            else if ($jobseeker->Bidang=="SKP") {
                $jobseeker->Bidang="Senior Kontrol Pembangunan";
            }
            else if ($jobseeker->Bidang=="ISD") {
                $jobseeker->Bidang="Insinyur Sumber Daya";
            }
            else if ($jobseeker->Bidang=="PM") {
                $jobseeker->Bidang="Pengawasan Mesin";
            }
            else if ($jobseeker->Bidang=="PengoperasianMesin") {
                $jobseeker->Bidang="Pengoperasian Mesin";
            }
            else if ($jobseeker->Bidang=="PKM") {
                $jobseeker->Bidang="Perancangan dan Kontruksi Mesin";
            }
            else if ($jobseeker->Bidang=="ProsesManufaktur") {
                $jobseeker->Bidang="Proses Manufaktur";
            }
            else if ($jobseeker->Bidang=="STMM") {
                $jobseeker->Bidang="Staff Teknik Mesin / Maintenance";
            }

            // Konversi nilai gaji bidang dari database untuk ditampilkan di view

            if ($jobseeker->gaji=="1juta") {
                $jobseeker->gaji="< Rp. 1.500.000";
            }
            else if ($jobseeker->gaji=="3juta") {
                $jobseeker->gaji="Rp. 1.500.000 - Rp. 3.000.000";
            }
            else if ($jobseeker->gaji=="5juta") {
                $jobseeker->gaji="Rp. 3.000.000 - Rp. 5.000.000";
            }
            else if ($jobseeker->gaji=="10juta") {
                $jobseeker->gaji="Rp. 5.000.000 - Rp. 10.000.000";
            }
            else if ($jobseeker->gaji=="10jutaup") {
                $jobseeker->gaji="Rp. 10.000.00 >";
            }
        }
        // memanggil template page dashboard
        // $this->template->load('Admin/Template/index1','Admin/Content/job_seeker',$data);
        $this->template->load('Admin/Template/index1','Admin/Content/job_seeker',$data);
	}
}
