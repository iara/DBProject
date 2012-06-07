<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Repositories extends MY_Controller {

    function __construct() {
        parent::__construct(array('model' => 'repositories_model'));
    }

    public function index() {
        $data['default_model'] = $this->default_model->get_all();
        $this->load->view('admin/repositories/index', $data);
    }

}

/* End of file repositories.php */
/* Location: ./application/controllers/repositories.php */