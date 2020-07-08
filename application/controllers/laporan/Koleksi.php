<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koleksi extends CI_Controller
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
            'sub_title' => 'Koleksi',
            'location' => 'Laporan',
            'content' => 'laporan/v_koleksi',
        ];

        $this->load->view('component/v_wrapper', $view);
    }

}
?>
