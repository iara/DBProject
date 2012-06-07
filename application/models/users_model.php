<?php

class Users_Model extends MY_Model {

    function __construct() {
        parent::__construct();
        
        $this->_table = 'users';
        $this->primary_key = 'usr_id';
    }

}

?>