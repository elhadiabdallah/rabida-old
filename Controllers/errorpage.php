<?php

class errorpage extends MainController {

    function __construct() {
        parent::__construct();

    }
    public function index(){
        $this->view->msg="this isffffff error page from view";
        $this->view->render('error/index','sidebar');
    }
    

}