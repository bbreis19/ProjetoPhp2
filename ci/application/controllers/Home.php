	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	 
	public function index(){
		$this->load->view('home');
	}
	public function cadastrar(){
		$this->load->view('cadastro');
	}
	public function loginAdm(){
		$this->load->view('loginAdm');
	}
}
