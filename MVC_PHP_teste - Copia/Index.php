<?php 

require "controller/Controllershome.php";

try{
    $teste = new Controller();

    $teste->Index();
}catch(\Error $e) // \Error é uma classe do sistema que é responsalve por tratar errp
{   //$e varialvel de controlle que representa os erros
    echo "Falha no Sistema Aguarde...:".$e->getMessage(); // metodo da classe Error
}

