
<!DOCTYPE html>

<html lang="pt-br">
<head>	
							<!--informação sobre a pagina titulo, informação sobre codificação-->
		<link rel="stylesheet" type="text/css" href="cadastroestilo.css">
		<meta charset="UTF-8">	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">		
		<title>Principal</title>
</head>
	<body id="container">

		<script>
		
		function valida(){
			var senha = document.getElementById("senha1").value;
			var confsenha = document.getElementById("senha2").value;
			
			if(senha != confsenha){
				alert("Senhas não Coincidem");
				document.getElementById("senha2").value = "";
			
			}
		}
			/*function mensagem(){
				alert("Usuário Cadastrado");
				location.href="http://localhost/atividadeWalter/index.php"
			}*/
			
		</script>		
		<form action="sessao.php" method="POST" name="form" autocomplete="off">
		
		<p></p>
		
		<!--<h1>Faça seu Cadastro</h1>-->
	
		<div id="painel">
			<h1>Cadastre-se</h1>
			<p>Insira seus dados abaixo para obter acesso ao sistema.</p>
		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Nome do Usuário</label>-->
			<input type="text"  id="usua" aria-describedby="emailHelp" placeholder="Seu Nome" name="usuario" class="form-control" required autocomplete="off">
		  </div>
		  
		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Senha</label>-->
			<input type="password"  id="senha1" aria-describedby="emailHelp" placeholder="Sua Senha" name="senha" class="form-control" required autocomplete="off">
		  </div>

		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Redigite a Senha</label>-->
			<input type="password"  id="senha2" aria-describedby="emailHelp" placeholder="Confirme sua Senha" name="consenha" class="form-control" onblur="valida()" required autocomplete="off"/>
		  </div>

		  <div class="form-group">
			<!--<label for="exampleInputEmail1">Redigite a Senha</label>-->
			<input type="text"  id="email" aria-describedby="emailHelp" placeholder="Digite seu E-mail" name="email" class="form-control" required autocomplete="off"/>
		  </div>
		  
		 <button type="submit" class="btn btn-info" value="Enviar">Cadastrar</button>
		</div>

		</form>	
		
	</body>
</html>
