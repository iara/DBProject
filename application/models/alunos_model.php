<?php

class Alunos_Model extends MY_Model {

    function getAll(){
        return $this->db->select('*')->from('aluno')->get()->result();
    }
}
?>