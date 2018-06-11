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
	
	public function dashusuario(){
		$this->load->view('dashusuario');
	}
	
	public function alterarsenha(){
		$this->load->view('alterarsenha');
	}
	
	public function excluirconta(){
		$this->load->view('excluirconta');
	}
	public function buscaInscricoes(){
		$this->load->model('InscricoesModel');
		$lista = $this->InscricoesModel->buscaInscricoes();
		$dados = array("inscricoes" => $lista);
		$this->load->view('adm', $dados);
	}
	
	public function form(){
		$data = array();
		$data["msg"] = $this->session->userdata("msg");
		$this->load->view("home",$data);
		$this->session->unset_userdata("msg");
	}
	
	

}
