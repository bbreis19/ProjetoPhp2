<?php
 
  class Admdao extends CI_Model{
      
      public function getUser($email, $senha){
          $this->db->where('email',$email);
          $this->db->where('senha',$senha);
          $adm->$this->db->get('adm');
          require_once APPPATH."models/adm.php";
          if($adm->num_rows()>0){
              $administrador = $adm ->result()[0];
              $id = $administrador ->id;
              $nome = $administrador ->nome;
              $emailUser = $administrador ->email;
              $senhaUser = $administrador ->senha;
              return new AdmModel($id,$nome,$emailUser,$senhaUser);
          }else{
              return null;
          }
      }
  }
?>