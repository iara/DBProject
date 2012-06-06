<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alunos extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('alunos_model', 'alunos');
    }

    public function index() {
        $data['alunos'] = $this->alunos->get_all();
        $this->load->view('admin/alunos/index', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */