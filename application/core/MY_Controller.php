<?php

class MY_Controller extends CI_Controller {

    public function add() {
        $this->db->insert('alunos', array('cod_aluno' => $_POST['cod_aluno'], 'nome_aluno' => $_POST['nome_aluno'], 'nota_aluno' => $_POST['nota_aluno']));

        if (isset($_SERVER["HTTP_REFERER"])) {
            redirect($_SERVER["HTTP_REFERER"]);
        } else {
            redirect("$controller/index");
        }
    }


}

?>
