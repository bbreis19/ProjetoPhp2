<?php
    class ModalidadeModel extends CI_Model {
        
        public function inscrever($modalidade, $usuario){
            $this->db->set(array('id_aluno' => $usuario, 'id_modalidade' => $modalidade));
            return $this->db->insert('inscricao');
        }
        
    }
?>