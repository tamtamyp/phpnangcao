<?php
    class Controller {
        function model($model) {
            require_once("../Bai7/Models/{$model}.php");
            return new $model;
        }
        function view($view, $model) {
            require("../Bai7/Views/{$view}.php");    
        }
    }
?>