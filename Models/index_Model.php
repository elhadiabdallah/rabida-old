<?php

class index_Model extends MainModel {

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

}
