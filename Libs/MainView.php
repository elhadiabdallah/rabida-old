<?php

class MainView {

    function __construct() {
        
    }

    public function render($name, $includes = "no_thing") {
        switch ($includes) {
            case "no_thing":
                require_once 'Views/no_header.php';
                require_once 'Views/' . $name . '.php';
                require_once 'Views/footer.php';
                break;
            case "header_footer":
                require_once 'Views/header.php';
                require_once 'Views/' . $name . '.php';
                require_once 'Views/footer.php';
                break;
            case "sidebar":
                require_once 'Views/header_sidebar.php';
                require_once 'Views/' . $name . '.php';
                require_once 'Views/footer_sidebar.php';
                break;
        }
    }

}
