<?php
    class Programador extends Pessoa{   // usando recurso de herança

        public $Linguagem;
        const ESPECIE = "Humano";   // criando uma constante
        public function __construct($testenome, $lLinguagem)
        {
            $this->nome = $testenome;
            // criando exeção
            if($testenome == null){
                throw new \InvalidArgumentException("Item não pode ser nulo");
            }
            $this->Linguagem = $lLinguagem;
           // echo "<br> o objeto".__METHOD__."foi INSTANCIADO<br>";   // criando uma constante magica
        }

        public function getLinguagem(){      // metodo para retonar valor
            return $this->Linguagem;
         }
    }
?>