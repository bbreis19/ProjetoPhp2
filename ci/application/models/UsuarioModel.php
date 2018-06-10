<?php
    class UsuarioModel extends CI_Model {
    
    	public function first($email){
    		return $this->db->get_where('usuario', array('email' => $email))->row();
    	}
    	
    	public function autentica($email, $senha){
    		return $this->db->get_where('usuario', array('email' => $email, 'senha' => $senha))->row();
    	}
    	
    	public function getAll(){
    		return $this->db->get('usuario')->result();
    	}
    	
    	public function inserir($dados){
            $this->db->set($dados);
            $this->db->insert('usuario');
            return $this->db->insert_id();
    	}
    	
    	public function atualizar($dados){
    		$this->db->where('id', $dados['id']);
    		return $this->db->update('usuario', $dados);
    	}
    }
?>