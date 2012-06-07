<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends MY_Controller {

    function __construct() {
        parent::__construct(array('model' => 'users_model'));
    }

    public function index() {
        $data['default_model'] = $this->default_model->get_all();
        $this->load->view('admin/users/index', $data);
    }

}

/* End of file users.php */
/* Location: ./application/controllers/users.php */