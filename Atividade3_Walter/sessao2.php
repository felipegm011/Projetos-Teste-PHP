
	<?php
		session_start();
		// dados do index principal login
		$login = $_POST['usua'];
		$senhaindex = md5($_POST['senh']);


		$conexao = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conexao, "cadastro");

		$consulta = mysqli_query($conexao,"SELECT (nome) FROM pessoa WHERE nome= '$login'");
		$consulta1 = mysqli_query($conexao,"SELECT senha FROM pessoa WHERE senha= '$senhaindex' AND nome='$login'");

		$row = $consulta->fetch_row(); // retorna em em array o numero de linhas ref a consulta
		$row1 = $consulta1->fetch_row();
	
		if($row[0] == $login && strcmp($row1,$senhaindex) == 0){
			header("Location: http://localhost/Atividade3_Walter/painel.php");
			$_SESSION['entra'] = 1;
		}else{
			echo "<script>alert('Usuario ou Senha Não Cadastrado');</script>";	
		}
		echo '<br/>'.'<br/>'.'<a href="http://localhost/Atividade3_Walter/"><button>Voltar</button></a>.';
		mysqli_close($conexao);
	?>