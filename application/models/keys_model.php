<?php

class Keys_Model extends MY_Model {

    function __construct() {
        parent::__construct();
        
        $this->_table = 'keys';
        $this->primary_key = 'ky_id';
    }

}

?>