<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WazifatShaghira extends CI_Controller {
	/**
	 * Job Vacancy page admin
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
        // memanggil template page dashboard
        $this->template->load('Admin/Template/index1','Admin/Content/job_vacancy',$data);
	}
}
