	<?php		
		
		$produto = $_POST['Produto'];
		$valor = (int)$_POST['Valor'];
		$quantidade = (int)$_POST['Quantidade'];
		
		$conexao = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conexao, "cadastro");
        mysqli_query($conexao, "INSERT INTO produto (nome,preco,quantidade) VALUES ('$produto','$valor','$quantidade');");
    
        header("Location: http://localhost/Atividade3_Walter/painel.php");

        
        /*
		$consulta = mysqli_query($conexao,"SELECT * FROM pessoa WHERE nome= '$nome'");
		$consulta1 = mysqli_query($conexao,"SELECT * FROM pessoa WHERE senha= '$senha'");
		$linha = mysqli_num_rows($consulta);
		$linha2 = mysqli_num_rows($consulta1);

			if($linha == 0 && $linha2 == 0 ){
				
			}else{
				echo  "<script>alert('Usuario ou Senha Existe Tente Novamente');</script>";	
			}
			//header("Location: http://localhost/Atividade3_Walter/cadastro.php");
			echo '<br/>'.'<br/>'.'<a href="http://localhost/Atividade3_Walter/cadastro.php"><button>Voltar</button></a>.';
        */
	
	?>
	
