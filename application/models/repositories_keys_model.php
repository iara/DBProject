<?php

class Repositories_Keys_Model extends MY_Model {

    function __construct() {
        parent::__construct();
        
        $this->_table = 'repositories_keys';
        $this->primary_key = 'repo_ky_id';
    }

}

?>