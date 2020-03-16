<?php
require "Modelhome.php";
require "View.php";

class Controller
{
    public function Index()
    {
        $model = new Model();
        $view = new View();
        
        $view->Exibir($model->ListarDados());

    }

}