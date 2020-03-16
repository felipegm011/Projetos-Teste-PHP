	<?php		
		
		$produto = $_POST['Produto'];
		$valor = (int)$_POST['Valor'];
		$quantidade = (int)$_POST['Quantidade'];
		
		$conn = new PDO('mysql:host=localhost;port=3307; dbname=atividade', 'root', '');
		$conn->exec("INSERT INTO produto (nome,preco,quantidade) VALUES ('$produto','$valor','$quantidade');");
    
		header("Location: http://localhost/Atividade4_Walter%20Final/painel.php");
			
	?>
	
