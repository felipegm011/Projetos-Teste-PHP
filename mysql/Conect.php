<?php

class Conect{

    private $nome;
    private $senha;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSenha(){
        return $this->nome;
    }
    public function setSenha($senha){
        $this->senha = $senha;
        
    }

    public function salvarBd(){
    
        $conn = new PDO('mysql:host=localhost;port=3306; dbname=atividade', 'root', '91538551');
		$result = $conn->query("SELECT * FROM pessoa WHERE nome='$this->nome'");
		$result1 = $conn->query("SELECT * FROM pessoa WHERE senha='$this->senha'");

		$linha = $result->rowCount();
		$linha2 = $result1->rowCount();

		//if($linha == 0 && $linha2 == 0 )
			if($linha == 0 && $linha2 == 0 ){
				$conn->exec("INSERT INTO pessoa (nome,senha) VALUES ('$this->nome','$this->senha');");
			}else{
				echo  "<script>alert('Usuario ou E-mail Existe Tente Novamente');</script>";	
			}
    }

    public function retornaconsula(){
        $conn = new PDO('mysql:host=localhost;port=3306; dbname=atividade', 'root', '91538551');
        $result1 = $conn->query("SELECT * FROM pessoa");

        echo "<table class='table table-striped'";
        echo "<tr>";
            echo "<th scope='col'>".'Usuários'."</th>";
            echo "<th scope='col'>".'Senhas'."</th>";
			echo "</tr>";
         while($registro = $result1->fetch()){
            $prod = $registro['NOME'];
            $vlr = $registro['SENHA'];
            echo "<tr>";
            echo "<td>".$prod."</td>";
            echo "<td>".$vlr."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}