<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth {
    public function cek_auth()
	{
		$this->ci =& get_instance();
		$this->sesi  = $this->ci->session->userdata('status_login');
		//$this->sesi  = $this->ci->session->userdata('id');
		$this->hak = $this->ci->session->userdata('stat');
		if($this->sesi != TRUE){
			redirect('adminweb','refresh');
			exit();
		}
		
	}
	public function hak_akses($kecuali="")
	{	
    	if($this->hak==$kecuali){ 
    		echo "<script>alert('Anda tidak berhak mengakses halaman ini!');</script>";
    		redirect('login');
    	}elseif ($this->hak=="") {
    		echo "<script>alert('Anda belum login!');</script>";
    		redirect('adminweb');
    	}else{
 
    	}
	}
}
 