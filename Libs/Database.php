<?php

class Database extends PDO {
    public $options=array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_CASE=>'PDO::CASE_LOWER'
        );
    function __construct() {
        parent::__construct(DSN, DBUSER, DBPASS, $this->options);
    }

}