<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_keys extends MY_Controller {

    function __construct() {
        parent::__construct(array('model' => 'users_keys_model'));
    }

    public function index() {
        $data['default_model'] = $this->default_model->get_all();
        $this->load->view('admin/users_keys/index', $data);
    }

}

/* End of file users_keys.php */
/* Location: ./application/controllers/users_keys.php */