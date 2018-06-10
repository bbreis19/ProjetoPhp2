<?php
require_once APPPATH."models/usuario.php";
require_once APPPATH."models/formulario.php";
    class cadastroModel extends Usuario implements formulario{
        private $curso, $sexo;
        
        public function __construct($id, $nome, $curso, $sexo, $email, $senha){
            parent:: __construct($id, $nome,$email, $senha);
           
            $this->sexo = $sexo;
            $this->curso = $curso;
        }
         
        public function toArray(){
            $aux = array();
            $aux["nome"] = $this->getNome();
            $aux["curso"] = $this->curso;
            $aux["sexo"] = $this->sexo;
            $aux["email"] = $this->getEmail();
            $aux["senha"] = $this->getSenha();
            return $aux;
        }

        public function getClassName(){
            return "usuario";
        }
    
	}

?>