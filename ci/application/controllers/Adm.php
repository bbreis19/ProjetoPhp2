	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."models/usuario.php";

class Adm extends CI_Controller {
	
	public function index()
	{
		$this->load->view('adm');
	}
	
	public function dashboard(){
		if($this->session->userdata("adm")){
			$data["nome"] = $this->session->userdata("adm");
			$this->load->model('admdao');

			$data['inscricoes'] = $this->admdao->getInscricoes();
				
			$this->load->view("adm",$data);
		}else{
			redirect('dashadm','refresh');
		}
	}
	
	public function auth(){
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/adm.php";
		$this->load->model('admdao');
		$admindao = $this->admdao;
		$admin = $admindao->getUser($email,$senha);
		$inscricoes = $admindao->getInscricoes();
		if(isset($admin)){
			$this->session->set_userdata("adm",$admin->getNome());
			redirect('adm/dashboard/', 'refresh');			
		}else{
			redirect('/home/form','refresh');
    }
	}
	
	
    /*foreach ($inscricoes as $inscricao) {
      <tr>
        <td>$inscricao['nome']</td>
        <td>$inscricao['curso']</td>
        <td>$inscricao['modalidade']</td>
      </tr>*/

}
