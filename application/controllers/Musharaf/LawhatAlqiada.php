<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LawhatAlqiada extends CI_Controller {
	/**
	 * dashboard admin
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
        $data['jobseeker'] = $this->Dashboard_m->JobSeeker_R(); //memindahkan isi datatbase job seeker
        $data['company'] = $this->Dashboard_m->Company_R(); //memindahkan isi datatbase company
        $data['staff'] = $this->Dashboard_m->Staff_R($_SESSION['main_data']['id']); //memindahkan isi datatbase company
        // memanggil template page dashboard
        $this->template->load('Admin/Template/index1','Admin/Content/dashboard',$data);
    }
    
}
