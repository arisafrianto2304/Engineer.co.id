<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
        $content = array(
            'title' => 'Lowongan Pekerjaan',
            'description' => 'Pilih lowngan pekerjaanmu sesuai yang kalian inginkan.',
        );
		$this->template->load('Template/index1','Content/services',$content);
	}
}
