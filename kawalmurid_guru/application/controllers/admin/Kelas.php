<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	public function __construct()
	
	{
	parent::__construct();
	
	}
	function index()
	{
		$this->load->view("admin/kelas");

	}

}
?>