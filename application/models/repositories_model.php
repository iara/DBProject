<?php

class Repositories_Model extends MY_Model {

    function __construct() {
        parent::__construct();
        
        $this->_table = 'repositories';
        $this->primary_key = 'repo_id';
    }

}

?>