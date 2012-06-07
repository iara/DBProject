<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contacts extends MY_Controller {

    function __construct() {
        parent::__construct(array('model' => 'contacts_model'));
    }

    public function form() {
        $data['default_model'] = $this->default_model->get_all();
        $this->load->view('admin/contacts/form', $data);
    }

}

/* End of file contacts.php */
/* Location: ./application/controllers/contacts.php */