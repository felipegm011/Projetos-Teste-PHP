	<?php

		session_start();
		
		// dados do cadatro de usuários
		$nome1 = $_POST['user'] ;
		$senha1 = md5($_POST['nsenha']);
		
		$conexao = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conexao, "cadastro");

        $consulta = mysqli_query($conexao,"SELECT COUNT(*) FROM pessoa WHERE nome='$nome1'");
        $row = $consulta->fetch_row();
			if($row[0] > 0){
				mysqli_query($conexao, "UPDATE pessoa SET senha ='$senha1' WHERE nome = '$nome1'");
			}else{
				echo  "<script>alert('Usuario não Existe');</script>";	
			}
			//header("Location: http://localhost/Atividade3_Walter/cadastro.php");
			//echo '<br/>'.'<br/>'.'<a href="http://localhost/Atividade3_Walter/cadastro.php"><button>Voltar</button></a>.';
			
	
	?>
	
