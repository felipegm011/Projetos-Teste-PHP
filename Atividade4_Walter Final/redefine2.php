	<?php

		session_start();
		
		// dados do cadatro de usuários
		$nome1 = $_POST['user'] ;
		$senha1 = base64_encode($_POST['nsenha']);
		
		$conn = new PDO('mysql:host=localhost;port=3307; dbname=atividade', 'root', '');
		$result = $conn->query("SELECT COUNT(*) FROM pessoa WHERE nome='$nome1'");
		//$conexao = mysqli_connect("localhost", "root", "");
		//mysqli_select_db($conexao, "cadastro");

        //$consulta = mysqli_query($conexao,"SELECT COUNT(*) FROM pessoa WHERE nome='$nome1'");
        $row = $result->fetch();
			if($row[0] > 0){
				$conn->exec("UPDATE pessoa SET senha ='$senha1' WHERE nome = '$nome1'");
			}else{
				echo  "<script>alert('Usuario não Existe');</script>";	
			}
			//header("Location: http://localhost/Atividade3_Walter/cadastro.php");
			//echo '<br/>'.'<br/>'.'<a href="http://localhost/Atividade3_Walter/cadastro.php"><button>Voltar</button></a>.';
			
	
	?>
	
