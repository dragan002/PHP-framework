<?php

class Controller {
    
    public function view($name) {
        $filename = "../app/views/" . $name[0] . "view.php";
        if(file_exists($filename)) {
            require $filename;
        } else {
            $filename = "../app/views/404.view.php";
            require $filename;
        }
    }
}


