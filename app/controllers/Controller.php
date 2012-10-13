<?php

class Controller {
    
    protected function render($view){
        return require_once '/app/views/'.$view.'.phtml';
    }
    
}

?>
