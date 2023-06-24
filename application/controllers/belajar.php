<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
 
	function index(){
		$data['biodata_1'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}
 
}