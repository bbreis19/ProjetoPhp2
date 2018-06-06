<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."models/usuario.php";
require_once APPPATH."models/cadastro.php";
class Cadastro extends CI_Controller {

	public function sair(){
		$this->session->unset_userdata("cadastro");
		redirect('home/form','refresh');
	}
	
     //METODO CADASTRAR USUARIO
    public function cadastrar(){
		$nome = $this->input->post("nome");
		$curso = $this->input->post("curso");
		$sexo = $this->input->post("sexo");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/cadastro.php";
		$user = new CadastroModel(0,$nome,$curso,$sexo,$email,$senha);
		//NAO HA CONSTRUTOR NOS DAO'S
		$this->load->model('insertdao');
		$insdao = $this->insertdao;
		$insdao->insert($user);
		$this->session->set_userdata("msg","Usuário Cadastrado");
		redirect('home/form','refresh');
        
    }
    
    public function auth(){
    	 
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/cadastro.php";
		$this->load->model('cadastrodao');
		$userdao = $this->usuariodao;
		$usuario = $userdao->getUser($email,$senha);
		if(isset($usuario)){
			$this->session->set_userdata("usuario",$usuario->getNome());
			redirect('feed/dashboard/','refresh');			
		}else{
		redirect('/home/form','refresh');
        }
    }
    
	// public function excluir(){
	// 	$senha = $this->input->post("senha");
	// 	require_once APPPATH."models/aluno.php";
	// 	$this->load->model('alunodao');
	// 	$aludao = $this->alunodao;
	// 	$aluno = $aludao->getSenha($senha);
	// 	if(isset($aluno)){
	// 		$this->session->unset_userdata("aluno");
	// 		$this->db->row_delete($senha);
 //       }
	// }
	
	// public function atualizar(){
	// 	$senha = $this->input->post("senha");
	// 	$email = $this->input->post("email");
	// 	require_once APPPATH."models/aluno.php";
	// 	$this->load->model('alunodao');
	// 	$aludao = $this->alunodao;
	// 	$aluno = $aludao->alterarSenha($email,$senha);
	// 	if(isset($aluno)){
	// 		$this->session->unset_userdata("aluno");
	// 		$this->db->update('senha');
			
			
 //       }
	// }
}
