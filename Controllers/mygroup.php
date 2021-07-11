<?php
class mygroup extends MainController {
    function __construct() {
        parent::__construct();
    }
    public function index(){
               $log_status = $this->log_status;
                $this->view->log_status = $log_status['logged'];
                $this->view->js = array('index/js/index.js', 'mygroup/js/mygroup_app.js');
                  if($log_status['logged'] == true){
                $this->view->title ="ربائدي";
                $this->view->render('mygroup/index','sidebar');
                }else{
                $this->view->title ="لم يتم العثور على الصفحة";
                $this->view->render('error/index','sidebar');
 
                }
    }
    
    
public function addrabida(){
                $log_status = $this->log_status;
                $count= $this->userdetails->myrabidascount($log_status['uid']);
                $this->view->log_status = $log_status['logged'];
                $this->view->js = array('index/js/index.js', 'mygroup/js/checking.js', 'mygroup/js/create.js');
                  if($log_status['logged'] == true){
                    if ($count < 5) {
                            $this->view->title = "إضافة ربيدة جديدة";
                            $this->view->render('mygroup/addrabida','sidebar');
                        }else{
                            $this->view->title ="لم يتم العثور على الصفحة";
                            $this->view->render('error/index','sidebar');
                        }
                    } else {
                        $this->view->title ="لم يتم العثور على الصفحة";
                        $this->view->render('error/index','sidebar');
                }
        
}
    
public function removerabida($rbd_id){
     $this->model->removerabida($rbd_id);
}
    


/*********************************************************************************************/

/*********************** Ajax Methods ***********************************/
public function create(){
    $this->model->create();
    }
public function verifyrbduser(){
    $this->model->verifyrabidauser();
    }
public function verifyrbdtitle(){
    $this->model->verifyrabidatitle();
    }

    

}
