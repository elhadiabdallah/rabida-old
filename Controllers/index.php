<?php

class index extends MainController {
    function __construct() {
        parent::__construct();
    }
    public function index(){
                $log_status = $this->log_status;
                if($log_status['logged'] == true){
                $this->view->log_status = $log_status['logged'];
                }
                $this->view->js = array('index/js/index.js');
                $this->view->title = "الرئيسية";
                $this->view->render('index/index','sidebar');
    } 

}

