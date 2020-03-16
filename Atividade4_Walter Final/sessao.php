	<?php

		session_start();
		
		// dados do cadatro de usuários
		$nome = $_POST['usuario'] ;
		$senha = base64_encode($_POST['senha']);
		$email = $_POST['email'];
		
		$conn = new PDO('mysql:host=localhost;port=3307; dbname=atividade', 'root', '');
		$result = $conn->query("SELECT * FROM pessoa WHERE nome= '$nome'");
		$result1 = $conn->query("SELECT * FROM pessoa WHERE nome= '$email'");

		$linha = $result->rowCount();
		$linha2 = $result1->rowCount();

		//if($linha == 0 && $linha2 == 0 )
			if($linha == 0 && $linha2 == 0 ){
				$conn->exec("INSERT INTO pessoa (nome,senha,email) VALUES ('$nome','$senha','$email');");
			}else{
				echo  "<script>alert('Usuario ou E-mail Existe Tente Novamente');</script>";	
			}
			//header("Location: http://localhost/Atividade3_Walter/cadastro.php");
			//echo '<br/>'.'<br/>'.'<a href="http://localhost/Atividade3_Walter/cadastro.php"><button>Voltar</button></a>.';
			
	

			//https://www.devmedia.com.br/contador-de-visitas-em-php-e-txt/11419
	?>
	
