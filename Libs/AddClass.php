<?php
class AddClass{
    public static function actived($elem=null){
        $item = explode('/', $_SERVER['REQUEST_URI']);
        $item = $item[2];
        if($item == ''){
            $item = 'index';
        }
        if ($elem == $item){
            echo 'active';
        }
    }

}