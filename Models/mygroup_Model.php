<?php

class mygroup_Model extends MainModel {

    function __construct() {
        parent::__construct();
    }
    
        public function create() {
        if (isset($_POST['title'], $_POST['rbd_type'], $_POST['desc'], $_POST['rbduser'])) {
            $user_id= Session::get('logged_id');
            $title = $_POST['title'];
            $rbduser = $_POST['rbduser'];
            $rbd_type = $_POST['rbd_type'];
            $desc = $_POST['desc'];
            
            if($rbd_type == '1'){
               
                           
            
            
            if (empty($title) or empty($rbd_type) or empty($rbduser)) {
                echo '0'; // الحقول فارغة
            } else {
            if(ctype_digit($title) or ctype_digit($desc)){
                echo '1';// يرجى استعمال الحروف في كتابة الاسم واللقب
            }else{
            if(mb_strlen($title) < 3){
                echo '2'; //طول العنوان والوصف
            }else{
               if(!preg_match('/[^A-Za-z0-9]/', $title)){
                 echo "3"; // الكتابة باللغة العربية
               }else{
                   if(!preg_match('/[^A-Za-z0-9]/', $rbduser)){
                $sth = $this->db->prepare("SELECT rabida_title  FROM rabida_lists WHERE rabida_title = ?");
                    $sth->bindParam(1, $title);
                    $sth->execute();
                    $count = $sth->rowCount();
                    if ($count > 0) {
                        echo '4'; // هذا العنوان مستخدم من قبل
                    } else {
                    $sth = $this->db->prepare("SELECT rabida_name  FROM rabida_lists WHERE rabida_name = ?");
                    $sth->bindParam(1, $rbduser);
                    $sth->execute();
                    $count = $sth->rowCount();
                    if ($count > 0){
                        echo '10'; //اسم مستخدم الربيدة محجوز من قبل
                    }else{
                        
                         $sth = $this->db->prepare("SELECT owner_id FROM rabida_lists WHERE owner_id = ?");
                        $sth->bindParam(1, $user_id);
                        $sth->execute();
                        $count = $sth->rowCount();
                        if($count >= 5){
                            
                                     echo '6'; 
 
                        }else{
                                                   $stmt = $this->db->prepare("INSERT INTO rabida_lists (rabida_title, owner_id, rabida_type, rabida_desc, rabida_name) VALUES (?, ?, ?, ?, ?)");
                        $stmt->bindParam(1, $title);
                        $stmt->bindParam(2, $user_id);
                        $stmt->bindParam(3, $rbd_type);
                        $stmt->bindParam(4, $desc);
                        $stmt->bindParam(5, $rbduser);
                        if ($stmt->execute()) {
                            echo '5'; // نجاح العملية
                            } else {
                               echo '6'; //فشلت عملية الإضافة
                            } 
                  
                        }
                        

                    }
                    
                    }
                   }else {
                       echo '11'; // الكتابة باللغة الإنجليزية
                   }
               
               }

            }
            }
                
                }
                    
            }else if($rbd_type == '2'){
                if(isset($_POST['mkind'], $_POST['kind'])){
                    $mkind=  $_POST['mkind'];
                    $kind=  $_POST['kind'];
                    if(empty($mkind) or empty($kind)){
                        echo '0'; //الحقول فارغة
                    }else{
                        if($mkind == 'none' ){
                            echo '8'; // اختر نوع الكتابة
                        }else{
                            if($kind == 'none'){
                                echo '9'; //
                            }else{
                                
                                         
            if (empty($title) or empty($rbd_type) or empty($rbduser)) {
                echo '0'; // الحقول فارغة
            } else {
            if(ctype_digit($title) or ctype_digit($desc)){
                echo '1';// يرجى استعمال الحروف في كتابة الاسم واللقب
            }else{
            if(mb_strlen($title) < 3){
                echo '2'; //طول العنوان والوصف
            }else{
               if(!preg_match('/[^A-Za-z0-9]/', $title)){
                 echo "3"; // الكتابة باللغة العربية
               }else{
                   if(!preg_match('/[^A-Za-z0-9]/', $rbduser)){
                    $sth = $this->db->prepare("SELECT rabida_title  FROM rabida_lists WHERE rabida_title = ?");
                    $sth->bindParam(1, $title);
                    $sth->execute();
                    $count = $sth->rowCount();
                    if ($count > 0) {
                        echo '4'; // هذا العنوان مستخدم من قبل
                    } else {
                    $sth = $this->db->prepare("SELECT rabida_name  FROM rabida_lists WHERE rabida_name = ?");
                    $sth->bindParam(1, $rbduser);
                    $sth->execute();
                    $count = $sth->rowCount();
                    if ($count > 0){
                        echo '10'; //اسم مستخدم الربيدة محجوز من قبل
                    }else{
                        
                        $sth = $this->db->prepare("SELECT owner_id  FROM rabida_lists WHERE owner_id = ?");
                        $sth->bindParam(1, $user_id);
                        $sth->execute();
                        $count = $sth->rowCount();
                        if($count >= 5){
                                                        echo '6';

  
                        }else{
                                                  $stmt = $this->db->prepare("INSERT INTO rabida_lists (rabida_title, owner_id, rabida_type, rabida_desc, rabida_main_cat, rabida_cat, rabida_name) VALUES (?, ?, ?, ?, ?, ?, ?)");
                        $stmt->bindParam(1, $title);
                        $stmt->bindParam(2, $user_id);
                        $stmt->bindParam(3, $rbd_type);
                        $stmt->bindParam(4, $desc);
                        $stmt->bindParam(5, $mkind);
                        $stmt->bindParam(6, $kind);
                        $stmt->bindParam(7, $rbduser);
                        if ($stmt->execute()) {
                            echo '5'; // نجاح العملية
                            } else {
                               echo '6'; //فشلت عملية الإضافة
                            } 
                        }

                    }

                    } 
                   }else{
                     echo '11' ; // الكتابة باللغة الانجليزية  
                   }
          
               
               }

            }
            }
                
                }
                                
                                
                                
                                
                            }
                        }
                    }
                    
                }else{
                    echo '7'; //خطأ نعتذر لم تصل المعلومات بشكل سليم 
                }
            
            }
            
            
 

        } else {
            echo '7'; //خطأ نعتذر لم تصل المعلومات بشكل سليم
        }
    }

    public function verifyrabidauser() {
            if(isset($_POST['rbd_username'])){
                $user = $_POST['rbd_username'];
                if (empty($user)){
                   echo '0'; //  فارغ 
                }else{
                    if(strlen($user) < 3 or strlen($user) > 12){
                    echo '0'; // اسم غير صالح طويل أو قصير
                }else{
                     if(preg_match('/[^A-Za-z0-9]/', $user)){
                            echo '0';  // اللغة الانجليزية  
                        }else{
                            if(is_numeric($user)){
                                echo '0'; // اﻷرقام 
                            }else{
                    $sth = $this->db->prepare("SELECT rabida_name FROM rabida_lists WHERE rabida_name = ?");
                    $sth->bindParam(1, $user);
                    $sth->execute();
                    $count = $sth->rowCount();
                        if($count > 0){
                        echo '0'; //  محجوز 
                        }else{
                        echo '1'; // صالح
                        }
                        }
                        
                        }
                
                        }
                        }
            }else{
                   echo '0'; //  خطأ 
            }
    }
    
        public function verifyrabidatitle() {
            if(isset($_POST['rbd_title'])){
                $title = $_POST['rbd_title'];
                if (empty($title)){
                   echo '0'; //  فارغ 
                }else{
                    if(mb_strlen($title) < 3 or mb_strlen($title) > 50){
                    echo '0'; // اسم غير صالح طويل أو قصير
                }else{
                     if(!preg_match('/[^A-Za-z0-9]/', $title)){
                            echo '0';  // اللغة العربية   
                        }else{
                            if(is_numeric($title)){
                                echo '0'; // اﻷرقام 
                            }else{
                    $sth = $this->db->prepare("SELECT rabida_title FROM rabida_lists WHERE rabida_title = ?");
                    $sth->bindParam(1, $title);
                    $sth->execute();
                    $count = $sth->rowCount();
                        if($count > 0){
                        echo '0'; //  محجوز 
                        }else{
                        echo '1'; // صالح
                        }
                        }
                        
                        }
                
                        }
                        }
            }else{
                   echo '0'; //  خطأ 
            }
    }    
       
    
    public function removerabida($rbd_id) {
            if(isset($_POST['rbd_id'])){
                $rbd_id = $_POST['rbd_id'];
                 $user_id= Session::get('logged_id');
                if (empty($user_id)){
                   echo '0'; //  فارغ 
                }else{
                    $sth = $this->db->prepare("DELETE FROM rabida_lists WHERE rabida_id = ? AND owner_id = ? ");
                    $sth->bindParam(1, $rbd_id);
                    $sth->bindParam(2, $user_id);
                    if($sth->execute()){
                     echo '1';   
                    }else{
                        echo '2';
                    }
                }
            }else{
                   echo '3'; //  خطأ 
            }
    }

            


}/// the end of create_Model Class
