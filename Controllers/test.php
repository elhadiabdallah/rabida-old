<?php

class test extends MainController {

    function __construct() {
        parent::__construct();
    }

    public function index() {

$token= Hash::create('sha256', mt_rand(), HASH_PASSWORD_KEY);
        echo $token;
    }



}
