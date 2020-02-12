<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuccessSubmitCv extends CI_Controller {

    function index()
	{
		$this->load->view('Content/Popup/DropCv');
    }
}

