<?php
    class Cadastrodao extends CI_Model{
        
        public function getUser($email,$senha){
            $this->db->where('email',$email);
		    $this->db->where('senha',$senha);
		    $user = $this->db->get('usuario');
		    require_once APPPATH."models/cadastro.php";
		    if ($user->num_rows()>0){
		        //SE FOSSEM VARIOS, FOR
		        $usuario = $user->result()[0];
		        $id = $usuario->id;
		        $nome = $usuario->nome;
		        $curso = $usuario->curso;
		        $sexo = $usuario->sexo;
		        $email = $usuario->email;
		        $senha = $usuario->senha;
		        return new CadastroModel($id,$nome,$curso,$sexo, $modalidades ,$email,$senha);
            }else{
                return null;
            }
    
        }
        

        
	    public function getSenha($senha){
		    $this->db->where('senha',$senha);
		    $user = $this->db->get('usuario');
		    require_once APPPATH."models/cadastro.php";
		    if ($user->num_rows()>0){
		        $this->db->where ('senha',$senha);
		        $this->db->delete('usuario');
		        redirect ('home/form',refresh);
	        }else{
	            return null;
	        }
	
	    }
       public function alterarSenha($email, $senha) {
		$this->db->where('email',$email);
		$user = $this->db->get('usuario');
		require_once APPPATH."models/cadastro.php";
		if ($user->num_rows()>0){
		  $this->db->where ('email',$email);
		  $this->db->set('senha',$senha);
		  $this->db->update ('usuario');
		  redirect('cadastro/dashboardUser','refresh');
       }else{
         return null;
            }
	}
    
    }
    