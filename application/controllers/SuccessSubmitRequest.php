<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuccessSubmitRequest extends CI_Controller {

    function index()
	{
        $this->load->view('Content/Popup/DropRequest');
    }
}