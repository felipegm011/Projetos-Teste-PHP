<?php
include "Conect.php";

// aquivo de controller  

//$dados = $_POST['usuario'];
//$dados2 = $_POST['senha'];  

//$classeController = new Controller();
//$classeController->add($dados,$dados2);

    
class Controller {

    /*public function __construct(){
       echo $_POST['usuario'];
       echo $_POST['senha'];
    }  */   
    public function insere(){
    $teste = new Conect();
    $teste->setNome($_POST['usuario']);
    $teste->setSenha($_POST['senha']);
    $teste->salvarBd();

    }
}




