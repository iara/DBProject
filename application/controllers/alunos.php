<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alunos extends MY_Controller {
    /*
      function __construct() {

      $this->load->model('alunos_model', 'alunos');
      parent::__construct();
      }
     */

    public function index() {
        $this->load->model('alunos_model', 'alunos');
        $data['alunos'] = $this->alunos->getAll();
        $this->load->view('admin/alunos/index', $data);
    }

    public function add() {
        $this->db->insert('aluno', array('cod_aluno' => $_POST['cod_aluno'], 'nome_aluno' => $_POST['nome_aluno'], 'nota_aluno' => $_POST['nota_aluno']));

        if (isset($_SERVER["HTTP_REFERER"])) {
            redirect($_SERVER["HTTP_REFERER"]);
        } else {
            redirect("$controller/index");
        }

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */