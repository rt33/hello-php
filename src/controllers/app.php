<?php

class App_Controller
{
    public function all()
    {
        require 'models/app.php';
        $app_model = new App_Model();

        return $app_model->all();
    }
}