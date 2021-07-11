<?php

class MainController {

    function __construct() {
        Session::init();
        $this->view = new MainView();
        $this->log_status = Session::log_status();
        if($this->log_status['logged'] == true){
            $this->userdetails = new UserDetails();
            $this->view->service_status = $this->userdetails->service($this->log_status['uid']);
            $this->view->userdetails = $this->userdetails->userdetails($this->log_status['uid']);
            $this->view->myrabidas_list = $this->userdetails->myrabidaslist($this->log_status['uid']);
            $this->view->myrabidas_count = $this->userdetails->myrabidascount($this->log_status['uid']);


        }   
    }
    public function loadModel($name,$modelPath = 'Models/') {
        $path = $modelPath . $name.'_Model.php';
        
        if (file_exists($path)) {
            require $modelPath .$name.'_Model.php';
            
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }        
    }

}