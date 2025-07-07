<?php

class Controller
{
    public function model($model)
    {
        require_once __DIR__ . '/../models/' . $models . '.php';
        return new $model;
    }

    public function view($view, $data = []) {
        require_once __DIR__ . '/../views/' . $view . '.php';
    }

    public function login() {
        $this->view('Users/login');
    }
}
