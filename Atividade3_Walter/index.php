<!DOCTYPE html>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Front End Login</title>

	<!-- IMPORTANDO O BOOTSTRAP  e CSS-->

	<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="https://kit.fontawesome.com/62d62ec1d2.js" crossorigin="anonymous"></script>
</head>
<body>

	<div id="form-container">

		<div class="panel" id="form-box"> <!-- a class panel é uma classe de painel do bootstrap -->
			<form action="sessao2.php" method="POST">
				<h1 class="text-center">Login</h1> <!-- classe do bootstrap para alinhar o texto -->

				<!-- caixa de texto de digitar usuário de acesso -->

				<div class="form-group" >	<!-- class form-group que agrapa inputs e label dentro da classe -->
				<label class="sr-only" for="login">Usuário</label>
					<div class="input-group">
						<div class="input-group-addon"> <!-- classe do bootstrap responsal pela icone do campo user representa o usuário-->
							<span class="glyphicon glyphicon-user"></span>
						</div>
						<input type="text" name="usua" class="form-control" placeholder="Digite seu Usuário"/>
					</div>
				</div>

				<!-- caixa de texto de senha -->

				<div class="form-group" >	<!-- class form-group que agrapa inputs e label dentro da classe -->
				<label class="sr-only" for="senha">Senha</label>
					<div class="input-group">
						<div class="input-group-addon"> <!-- classe do bootstrap responsal pela icone do campo-->
							<span class="glyphicon glyphicon-lock"></span> <!-- lock representa o cadeado -->
						</div>
						<input type="password" name="senh" class="form-control" placeholder="Digite sua Senha"/>
					</div>
				</div>

				<!-- botão de Entrar -->

					<div class="form-group">
						<input type="submit" value="Entrar" class="btn btn-success form-control"/><!-- classe de botão para boot strap-->
					</div>

				<!-- link no rodapé da div para cadastrar -->

					<div class="form-group">
						<p>Registre-se agora <a href="cadastro.php">Cadastre-se</a>  <a href="redefine.php">Esqueceu a Senha?</a></p></p>
					</div>
			</form>	
					<!-- botão com icone -->
					<a class="btn btn-primary" href="#" role="button"><i class="far fa-edit">Texto</i></a>
		</div>
	</div>

</body>
</html>

