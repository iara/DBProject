<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alunos extends MY_Controller {

    function __construct() {
        parent::__construct(array('model' => 'alunos_model'));
    }

    public function index() {
        $data['default_model'] = $this->default_model->get_all();
        $this->load->view('admin/alunos/index', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */