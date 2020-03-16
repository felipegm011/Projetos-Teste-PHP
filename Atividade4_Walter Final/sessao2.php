
	<?php
		session_start();	
		// dados do index principal login
		$login = $_POST['usua'];
		$senha1 = base64_encode($_POST['senh']);

		$conn = new PDO('mysql:host=localhost;port=3307; dbname=atividade', 'root', '');
		$result = $conn->query("SELECT (nome) FROM pessoa WHERE nome= '$login'");
		$result1 = $conn->query("SELECT senha FROM pessoa WHERE senha= '$senha1' AND nome='$login'");

		$row = $result->fetch(); /*Te retorna somente um elemento da consulta, creio que o primeiro... S
		e a consulta possuir mais de um elemento, os outros são ignorados*/
		$row1 = $result1->fetch();


		//https://pt.stackoverflow.com/questions/178911/retornar-uma-consulta-pdo-em-um-array

		if($row[0] == $login && strcmp($row1,$senha1) == 0){
			header("Location: http://localhost/FRONT/menu.php");
			$_SESSION['entrou'] = 1;
		}else{
			echo "<script>alert('Usuario ou Senha Não Cadastrado');</script>";	
		}
		echo '<br/>'.'<br/>'.'<a href="http://localhost/Atividade4_Walter%20Final/"><button>Voltar</button></a>.';
		unset($conn);
	?>