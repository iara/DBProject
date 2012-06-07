<?php

class Contacts_Model extends MY_Model {

    function __construct() {
        parent::__construct();
        
        $this->_table = 'ct_contact';
        $this->primary_key = 'conID';
    }

}

?>