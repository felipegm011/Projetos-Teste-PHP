	<?php

		session_start();
		
		// dados do cadatro de usuários
		$nome = $_POST['usuario'] ;
		$senha = md5($_POST['senha']);
		$email = $_POST['email'];
		
		$conexao = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conexao, "cadastro");

		$consulta = mysqli_query($conexao,"SELECT * FROM pessoa WHERE nome= '$nome'");
		$consulta1 = mysqli_query($conexao,"SELECT * FROM pessoa WHERE senha= '$senha'");
		$linha = mysqli_num_rows($consulta);
		$linha2 = mysqli_num_rows($consulta1);

			if($linha == 0 && $linha2 == 0 ){
				mysqli_query($conexao, "INSERT INTO pessoa (nome,senha,email) VALUES ('$nome','$senha','$email');");
			}else{
				echo  "<script>alert('Usuario ou Senha Existe Tente Novamente');</script>";	
			}
			//header("Location: http://localhost/Atividade3_Walter/cadastro.php");
			echo '<br/>'.'<br/>'.'<a href="http://localhost/Atividade3_Walter/cadastro.php"><button>Voltar</button></a>.';
			
	
	?>
	
