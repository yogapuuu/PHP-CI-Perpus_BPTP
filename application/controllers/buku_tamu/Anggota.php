<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller
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
            'sub_title' => 'Anggota',
            'location' => 'Buku Tamu',
            'content' => 'buku_tamu/v_anggota',
        ];

        $this->load->view('component/v_wrapper', $view);
    }
}

?>