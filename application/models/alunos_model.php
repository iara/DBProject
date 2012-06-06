<?php

class Alunos_Model extends MY_Model {

    function __construct() {
        parent::__construct();
        
        $this->_table = 'alunos';
        $this->primary_key = 'cod_aluno';
    }

}

?>