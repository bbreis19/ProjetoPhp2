<?php
    class ModalidadeModel extends CI_Model {
        
        public function buscaInscricoes(){
            return $this->db->get('inscricoes')->result_array();
        }
        
    }
?>