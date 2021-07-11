<?php

class test_Model extends MainModel {

    function __construct() {
        parent::__construct();
    }

    public function verify_status($hash = null) {
        $sth = $this->db->prepare("SELECT ethr_accnt_id, ethr_accnt_status FROM accounts WHERE 
                ethr_accnt_acctivation_key = ?");
        $sth->bindParam(1, $hash);
        $sth->execute();
        return $data = $sth->fetch(PDO::FETCH_ASSOC);
    }


}
