<?php

class rabida_Model extends MainModel {

    function __construct() {
        parent::__construct();
    }


 public function rabidadetails($rbduser = null) {
        $sth = $this->db->prepare("SELECT * FROM rabida_lists WHERE rabida_name = ?");
        $sth->bindParam(1, $rbduser);
        $sth->execute();
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
public function rabidaowner($rbduser = null) {
        $sth = $this->db->prepare("SELECT ethr_accnt_lname, ethr_accnt_fname FROM accounts INNER JOIN rabida_lists ON rabida_lists.owner_id = accounts.ethr_accnt_id;");
        $sth->bindParam(1, $rbduser);
        $sth->execute();
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

}
