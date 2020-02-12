<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sharika extends CI_Controller {
	/**
	 * company page admin
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
        $data['company'] = $this->Dashboard_m->Company_R(); //memindahkan isi datatbase company
        // memanggil template page dashboard
        $this->template->load('Admin/Template/index1','Admin/Content/company',$data);
	}
}
