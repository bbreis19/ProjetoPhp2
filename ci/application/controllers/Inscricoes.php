	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricoes extends CI_Controller {

	public function buscaInscricoes(){
		$this->load->model('InscricoesModel');
		$lista = $this->InscricoesModel->buscaInscricoes();
		$dados = array("inscricoes" => $lista);
		$this->load->view('adm', $dados);
	}
	

	

}
