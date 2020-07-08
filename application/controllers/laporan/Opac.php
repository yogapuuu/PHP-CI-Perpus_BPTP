<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opac extends CI_Controller
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
            'sub_title' => 'OPAC',
            'location' => 'Laporan',
            'content' => 'laporan/v_opac',
        ];

        $this->load->view('component/v_wrapper', $view);
    }

}
?>
