<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modalidade extends CI_Controller {


	public function inscricao($modalidade, $usuario){
		
		$this->load->model('ModalidadeModel');
		$this->ModalidadeModel->inscrever($modalidade, $usuario);
		
		redirect('cadastro/dashboardUser','refresh');
	}
}
