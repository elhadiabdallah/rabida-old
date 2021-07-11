<?php

class settings_Model extends MainModel {

    function __construct() {
        parent::__construct();
    }


 public function userdetails($id = null) {
        $sth = $this->db->prepare("SELECT * FROM accounts WHERE 
                ethr_accnt_id = ?");
        $sth->bindParam(1, $id);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } 
    
    public function updateprofile() {
 if (isset($_POST['fname'],$_POST['lname'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                if (empty($fname) or empty ($lname)) {
                    echo '0'; // الحقول فارغة
                } else { 
                echo '1'; //لقد تم اضافة الحدث بنجاح
                       
                    }    
                     
            }else{
     echo '0';
 }
    }

    
}//end class