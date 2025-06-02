<?php
    class Controller {
        function model($model) {
            require_once("../Bai8/Models/{$model}.php");
            return new $model;
        }
        function view($view, $model) {
            $className = substr_replace(get_class($this), "", -10);
            require_once("../Bai8/Views/{$className}/{$view}.php");    
        }
    }
?>