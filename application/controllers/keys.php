<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keys extends MY_Controller {

    function __construct() {
        parent::__construct(array('model' => 'keys_model'));
    }

    public function index() {
        $data['default_model'] = $this->default_model->get_all();
        $this->load->view('admin/keys/index', $data);
    }

}

/* End of file keys.php */
/* Location: ./application/controllers/keys.php */