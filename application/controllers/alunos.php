<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alunos extends MY_Controller {

    public function index() {
        /*
          $data = array(
          'nome' => 'iara',
          'sobrenome' => 'miranda'
          ); */

        $this->load->model('alunos_model', 'alunos');
        $this->db->insert('aluno', array('cod_aluno' => '5','nome_aluno' => 'iara1', 'nota_aluno' => '12' ));
        $data['alunos'] = $this->alunos->getAll();
        //pre($data['alunos'], true);
        last_query(1);
        $this->load->view('admin/alunos/index', $data);
    }

    public function cad() {
        echo pre($_POST);
        exit();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */