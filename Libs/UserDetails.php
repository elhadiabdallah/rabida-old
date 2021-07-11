<?php

class UserDetails extends MainModel {
    function __construct() {
    parent::__construct();
    }
        
 public function userdetails($id = null) {

        $sth = $this->db->prepare("SELECT * FROM accounts WHERE ethr_accnt_id = ?");
        $sth->bindParam(1, $id);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $data;
}
public function myrabidaslist($id = null) {
        $sth = $this->db->prepare("SELECT * FROM rabida_lists WHERE owner_id = ?");
        $sth->bindParam(1, $id);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $data;
}
public function myrabidascount($id = null) {
        $sth = $this->db->prepare("SELECT * FROM rabida_lists WHERE owner_id = ?");
        $sth->bindParam(1, $id);
        $sth->execute();
        $count = $sth->rowCount();
        return $count;
}

    public function service($id = null) {
    $rabida = "rabida";
    $sth = $this->db->prepare("SELECT services_type FROM services WHERE ethr_user_id = ? AND services_type= ? ");
    $sth->bindParam(1, $id);
    $sth->bindParam(2, $rabida);
    $sth->execute();
    $count = $sth->rowCount();
    if ($count > 0) {
    Session::set('rabida',1);
    return $st = Session::get('rabida');
    }else{
    Session::set('rabida',0);
    return $st = Session::get('rabida');
    }
    }
    
   public function rabidaname($name = null) {
    $rabida = "rabida";
    $sth = $this->db->prepare("SELECT rabida_name FROM rabida_lists WHERE rabida_name = ?");
    $sth->bindParam(1, $name);
    $sth->execute();
    $count = $sth->rowCount();
    if ($count > 0) {
          $data = $sth->fetch(PDO::FETCH_ASSOC);
    foreach ($data as $rabidaname){
           return $rabidaname; 
    }
    } else {
        return false;
    }
    }
   public function rabidaid($rabida_id = null) {
    $rabida = "rabida";
    $sth = $this->db->prepare("SELECT rabida_id FROM rabida_lists WHERE rabida_id = ?");
    $sth->bindParam(1, $rabida_id);
    $sth->execute();
    $count = $sth->rowCount();
    if ($count > 0) {
          $data = $sth->fetch(PDO::FETCH_ASSOC);
    foreach ($data as $rabida_id){
           return $rabida_id; 
    }
    } else {
        return false;
    }
    }


}
