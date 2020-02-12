<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
    {
        $content = array(
            'title' => 'Tentang Engineer',
            'description' => '',
        );
		$this->template->load('Template/index1','Content/about',$content);
	}
}
