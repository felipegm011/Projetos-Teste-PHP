<?php
        /*class Pessoa{       // criando a classe 
            public $nome;
            public $email;
    
            public function imprime(){      // criando o metodo da classre
                echo $this->nome;
            }
            public function imprime2(){
                echo $this->email;
            }
        }*/

      class Pessoa{       // criando a classe 
            protected $nome;  // definindo atribut como privado para só herdar as classes que herdam da mesm

            public function __construct($testenome) // contrutor de objetos
            {
                $this->nome = $testenome;
            }
            public function setNome($novoNome){      // metodo para passar valor
                $this->nome = $novoNome;
            }
            public function getNome(){      // metodo para retonar valor
               return $this->nome;
            }
        }


?>