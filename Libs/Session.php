<?php
class Session{
    public static function init(){
        if(!isset($_SESSION)){
        session_start();
        }
    }
    public static function set($key,$value){
        $_SESSION[$key]=$value;
    }
    public static function get($key){
        if(isset($_SESSION[$key])){
        return $_SESSION[$key];       
    }
    
        }
    public static function destroy(){
        session_destroy();
    } 
    
    public static function log_status(){
        if(isset($_SESSION['logged'])){
                if ($_SESSION['logged'] == 1){
                return $st=array("logged" => true, "uid" => $_SESSION['logged_id']);        
                }else{
                return $st=array("logged" => false, "uid" => nul);
                }
        }else{
        if(isset($_COOKIE['logged'])){
              if($_COOKIE['logged'] == 1){
                return $st=array("logged" => true, "uid" => $_COOKIE['logged_id']);     
                }else{
                return $st=array("logged" => false, "uid" => null);
                }  
        }
            
           

    }
    }
}