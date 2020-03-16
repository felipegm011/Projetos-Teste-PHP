	<?php
		
		// dados do cadatro de usuários
		$nome = $_POST['usuario'] ;
		$senha =($_POST['senha']);

		
		$conn = new PDO('mysql:host=localhost;port=3306; dbname=atividade', 'root', '91538551');
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
			//header("Location: http://localhost/Atividade3_Walter/cadastro.php");
			//echo '<br/>'.'<br/>'.'<a href="http://localhost/Atividade3_Walter/cadastro.php"><button>Voltar</button></a>.';
			
	

			//https://www.devmedia.com.br/contador-de-visitas-em-php-e-txt/11419
	?>
	
