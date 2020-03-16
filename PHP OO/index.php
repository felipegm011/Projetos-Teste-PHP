<?php

    require "Pessoa.php";   // conectando o arquivo da classe
    require "Programador.php";
    /*$teste = new Pessoa;        //criando o objeto da classe pessoa
    $teste->nome = "Felipe";    // passando valor para o atributo nome
    $teste->email = "Felipe.gm001@gmail.com";
    */

 ///  $teste = new Pessoa("Homologação"); //criando o objeto da classe pessoa e usando o contrutor passando direto a valor
   ///$teste->setNome ("Felipe");    // passando valor para o atributo nome através do metodo set
    //echo $teste->getNome();     // chamando metodos nome através do metodo get

    //lançando uma exception existe a class \Error $e <- variavel representa o erro
    try{
    $teste1 = new Programador("felipe","PHP");  // usando herança e criando um orbjeto de outra classe   // usando recurso de herança
    echo $teste1->getNome();
      //echo $teste1->getLinguagem();
      //echo $teste1::ESPECIE;  // chamano uma constante de outra classe
    }catch(InvalidArgumentException $e){
        echo" erro na aplicação aguarde". $e->getMessage();
    }finally{
      echo " </br>Processamento concluído";
    }
?>