<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pelanggaran extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
	
		if($this->session->userdata('status') != "login")
		{
			redirect(base_url("/"));
		}
    }
    
    function index()
    {
        $view = [
            'title' => 'Perpustakaan BPTP',
            'sub_title' => 'Data Pelanggaran',
            'location' => 'Sirkulasi',
            'content' => 'sirkulasi/v_data_pelanggaran',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>