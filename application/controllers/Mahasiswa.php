<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	
	function tambah()
    {
        $this->load->view('v_tambah_mahasiswa'); 
    }
}
?>