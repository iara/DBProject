<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Repositories_keys extends MY_Controller {

    function __construct() {
        parent::__construct(array('model' => 'repositories_keys_model'));
    }

    public function index() {
        $data['default_model'] = $this->default_model->get_all();
        $this->load->view('admin/repositories_keys/index', $data);
    }

}

/* End of file repositories_keys.php */
/* Location: ./application/controllers/repositories_keys.php */