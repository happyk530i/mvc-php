<?php

class Controller {
    public function model($model) {
        require_once "models/$model.php";
        return new $model ();
    }

    //當呼叫$view.php
    public function view($view, $data = Array()) {
        require_once "views/$view.php";
    }

}
