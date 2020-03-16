<?php
//use MVC_PHP_teste\model\ValidaLogin;
Class DadosLogin{
    public function dadosview(){
        require "model/ValidaLogin.php";
        $_Model = new ValidaLogin();

        $_Model->setNome($_POST['user']);
        $_Model->setSenha($_POST['password']);
        
    }   
    public function verifica(){
        require "model/ValidaLogin.php";
        $_verifica = new ValidaLogin();
        $_verifica->validaDados();
    }

    public function chamaview(){
        include "view/View.php";
    }

}



     /*$_user_Login = $_POST['user'];
     $_user_Senha = (int) md5($_POST['password']);  // no banco o campo deve estar como inteiro

        if(empty($_user_Login && $_user_Senha))
        {
            header("Location: http://localhost/MVC_PHP_teste/#");
        }else{
                echo" não cazias";
        }
     */