<?php

Class Banco extends ValidaLogin{

    public function gravabanco($novoNome,$novaSenha){
        $nome = $novoNome;
        $senha = $novaSenha;
        
        $conn = new PDO('mysql:host=localhost;port=3306; dbname=phpoo', 'root', '91538551');
		$result = $conn->query("SELECT * FROM pessoa WHERE nome= '$nome'");
		$result1 = $conn->query("SELECT * FROM pessoa WHERE senha= '$senha'");

		$linha = $result->rowCount();
		$linha2 = $result1->rowCount();

		//if($linha == 0 && $linha2 == 0 )
			if($linha == 0 && $linha2 == 0 ){
				$conn->exec("INSERT INTO pessoa (nome,senha) VALUES ('$nome','$senha');");
			}else{
				echo  "<script>alert('Usuario ou E-mail Existe Tente Novamente');</script>";	
			}
        }
}