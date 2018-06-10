<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."models/usuario.php";
require_once APPPATH."models/cadastro.php";
class Cadastro extends CI_Controller {

	public function index()
	{
		$this->load->view('dashusuario');
	}
	// public function sair(){
	// 	$this->session->unset_userdata("cadastro");
	// 	redirect('home/form','refresh');
	// }
	
     //METODO CADASTRAR USUARIO
    public function cadastrar(){
		$nome = $this->input->post("nome");
		$curso = $this->input->post("curso");
		$sexo = $this->input->post("sexo");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
	
		
		$this->load->model('UsuarioModel');
		$id_usuario = $this->UsuarioModel->inserir($this->input->post());
		
		// //NAO HA CONSTRUTOR NOS DAO'S

		$this->session->set_userdata("msg","Usuário Cadastrado");
		$this->session->set_userdata("usuario", $this->UsuarioModel->first($email));
		redirect('home/form','refresh');
        
    }
    
    public function auth(){
    	 
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/cadastro.php";

		$this->load->model('UsuarioModel');
		$usua = $this->UsuarioModel->autentica($email, $senha);
		
		if(isset($usua)){
			$this->session->set_userdata("usuario",$usua);
			redirect('cadastro/dashboardUser','refresh');			
		}else{
		redirect('/home/form','refresh');
        }
    }
    
    public function dashboardUser(){
		if($this->session->userdata("usuario")){
			$data["nome"] = $this->session->userdata("usuario");
			$this->load->view("dashusuario",$data);
		}else{
			redirect('dashadm','refresh');
		}
	}
    
	public function excluir(){
		$senha = $this->input->post("senha");
		require_once APPPATH."models/cadastro.php";
		$this->load->model('cadastrodao');
		$userdao = $this->usuariodao;
		$usuario = $userdao->getSenha($senha);
		if(isset($usuario)){
			$this->session->unset_userdata("usuario");
			$this->db->row_delete($senha);
        }
	}
	
	// public function atualizar(){
	// 	$senha = $this->input->post("senha");
	// 	$email = $this->input->post("email");
	// 	require_once APPPATH."models/cadastro.php";
	// 	$this->load->model('cadastrodao');
	// 	$userdao = $this->userdao;
	// 	$usuario = $userdao->alterarSenha($email,$senha);
	// 	if(isset($usuario)){
	// 		$this->session->unset_userdata("usuario");
	// 		$this->db->update('senha');
			
			
 //       }
	// }
	
	public function logoff(){
		$this->session->unset_userdata('usuario');
		$this->session->sess_destroy();
		redirect('home');
	}
}
