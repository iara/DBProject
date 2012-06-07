<?php

class Users_Keys_Model extends MY_Model {

    function __construct() {
        parent::__construct();
        
        $this->_table = 'users_keys';
        $this->primary_key = 'usr_ky_id';
    }

}

?>