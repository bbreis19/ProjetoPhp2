<?php
 
  class Admdao extends CI_Model{
      
      public function getUser($email,$senha){
        $this->db->where('email',$email);
		$this->db->where('senha',$senha);
		$adm = $this->db->get('adm');
		require_once APPPATH."models/adm.php";
	    if ($adm->num_rows()>0){
	        //SE FOSSEM VARIOS, FOR
	        $administrador = $adm->result()[0];
	        $id = $administrador->id;
	        $nome = $administrador->nome;
	        $emailAlu = $administrador->email;
	        $senhaAlu = $administrador->senha;
	        return new AdmModel($id,$nome,$emailAlu,$senhaAlu);
        }else{
            return null;
        }
      }
      
       public function getInscricoes(){
    	return $this->db->query("
        	SELECT
        		u.nome,
        		u.curso,
        		m.descricao
        	FROM
        		inscricao AS i
        	INNER JOIN
        		usuario AS u ON u.id = i.id_aluno
        	INNER JOIN
        		modalidade AS m on m.id = i.id_modalidade;
        ");
      }
  }
?>