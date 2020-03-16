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
        /*if(empty($this->nome == " " && $this->senha == " ")){
            echo "Os dados estão vazois";
        }else{
        $var1 = $this->nome;
        $var2 = $this->senha;
        */
        $conn = new PDO('mysql:host=localhost;port=3306; dbname=phpoo', 'root', '91538551');
		$result = $conn->query("SELECT * FROM pessoa WHERE nome= '$var1'");
		$result1 = $conn->query("SELECT * FROM pessoa WHERE senha= '$var2'");

		$linha = $result->rowCount();
		$linha2 = $result1->rowCount();

		//if($linha == 0 && $linha2 == 0 )
			if($linha == 0 && $linha2 == 0 ){
				$conn->exec("INSERT INTO pessoa (nome,senha) VALUES ('$var1','$var2');");
			}else{
				echo  "<script>alert('Usuario ou E-mail Existe Tente Novamente');</script>";	
			}
    }
 
}