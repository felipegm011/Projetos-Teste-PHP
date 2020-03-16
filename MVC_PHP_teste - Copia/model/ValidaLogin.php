<?php

Class ValidaLogin
{      
    private $nome;
    private $senha;
    
    public function setNome($novoNome){      // metodo para passar valor
        $this->nome = $novoNome;
    }
    public function getNome(){      // metodo para retonar valor
       return $this->nome;
    }
    public function setSenha($novaSenha){      // metodo para passar valor
        $this->senha = $novaSenha;
    }
    public function getSenha(){      // metodo para retonar valor
       return $this->senha;
    }

    public function validaDados()
    {
        
    }
 
}