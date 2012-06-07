<?php

class MY_Controller extends CI_Controller {

    public $controller;
    
    function __construct($config = array()) {
        parent::__construct();
        
        $this->controller = get_class($this);
        $this->data['controller'] = $this->controller;
        
        if(isset($config['model']) && !empty($config['model'])){
            $this->load->model($config['model'], 'default_model');
        }     
    }


    public function add() {
        //pre($_POST,1);
        $_inserted = $this->default_model->insert($_POST, TRUE);
        if(isAjax()){
            echo $_inserted ? 'sucess' : 'error';
        }
        else{
        $this->session->set_flashdata('alert', $_inserted ? 'sucess' : 'error');
            
        if (isset($_SERVER["HTTP_REFERER"])) {
                redirect($_SERVER["HTTP_REFERER"]);
            } else {
                redirect("$controller/index");
            }
        }
    }


}

?>
