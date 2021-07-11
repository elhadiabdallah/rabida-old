<?php
class rabida extends MainController {
    function __construct() {
        parent::__construct();
    }
    public function index(){
         $log_status = $this->log_status;
                if($log_status['logged'] == true){
                $this->view->log_status = $log_status['logged'];
                }
                $rbduser= $_GET['url'];
                $rbddetails = $this->model->rabidadetails($rbduser) ;
                $rbdowner = $this->model->rabidaowner($rbduser) ;

                $this->view->js = array('rabida/js/rabida.js', 'index/js/index.js');
                $this->view->title =$rbddetails['rabida_title'];
                $this->view->rbddetails = $rbddetails;
                $this->view->render('rabida/index','sidebar');
    }
    
    public function addarticle(){
         echo 'add';
    }

    public function editarticle(){

               $log_status = $this->log_status;
              
                $this->view->log_status = $log_status['logged'];
                $this->view->js = array('index/js/index.js', 'rabida/js/index.js');
                  if($log_status['logged'] == true){
                $this->view->title ="تحرير المقال";
                $this->view->render('addarticle/index','sidebar');
                }else{
                $this->view->title ="لم يتم العثور على الصفحة";
                $this->view->render('error/index','sidebar');
 
                }

    }    
    
}