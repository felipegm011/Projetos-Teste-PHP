
<!DOCTYPE html>

<html lang="pt-br">
<head>	
							<!--informação sobre a pagina titulo, informação sobre codificação-->
		<link rel="stylesheet" type="text/css" href="alterar.css">
		<meta charset="UTF-8">	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">		
		<title>Principal</title>
</head>
	<body id="redefine">
	
		<script>
		
		function valida(){
			var senha = document.getElementById("senha1").value;
			var confsenha = document.getElementById("senha2").value;
			
			if(senha != confsenha){
				alert("Senhas não Coincidem");
				document.getElementById("senha2").value = "";
				if(confsenha == ""){
					alert("Confirme a Senha Por Favor");
				}
			}
		}
			/*function mensagem(){
				alert("Usuário Cadastrado");
				location.href="http://localhost/atividadeWalter/index.php"
			}*/
			
		</script>		
		<form action="redefine2.php" method="POST" name="form">
		
		<p></p>
		
		<!--<h1>Faça seu Cadastro</h1>-->
	
		<div id="painel">
		<h1>Redefina seu Usuário e Senha</h1>
			<p>Insira novamente os dados abaixo para redefinir o usuario e ter acesso ao sistema.</p>
		 <div class="form-group">
			<!--<label for="exampleInputEmail1">Nome do Usuário</label>-->
			<input type="text" id="usua" aria-describedby="emailHelp" placeholder="Seu Nome" name="user" class="form-control" required>
		  </div>
		  
		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Senha</label>-->
			<input type="password"  id="senha1" aria-describedby="emailHelp" placeholder="Sua Senha" name="nsenha" class="form-control" required>
		  </div>

		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Redigite a Senha</label>-->
			<input type="password"  id="senha2" aria-describedby="emailHelp" placeholder="Confirme sua Senha" name="consenha" class="form-control" onblur="valida()" required/>
		  </div>
		  
		 <button type="submit" class="btn btn-danger"  value="Enviar">Redefinir</button>
		</div>

		</form>	
	</body>

</html>