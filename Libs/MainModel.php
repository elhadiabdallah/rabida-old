<?php

class MainModel {

    function __construct() {
        $this->db = new Database();
        $this->db->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
    }

}
