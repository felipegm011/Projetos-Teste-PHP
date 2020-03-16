<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Front End Login</title>

	<!-- IMPORTANDO O BOOTSTRAP  e CSS-->

	<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="painel.css">

</head>

<body>

	<script>
		function redirect(){
			window.location.href = "http://localhost/Atividade3_Walter/lista.php";
		}
		function redirect1(){
			window.location.href = "http://localhost/Atividade3_Walter/lista2.php";
		}

	</script>

<div id="form-container">
<form action="produto.php" method="POST">
<div class="row">
<div class="col-sm-4">
	<div class="form-group">
		<label for="exampleInputEmail1">Descrição do Produto</label>
		<input type="text" class="form-control" name="Produto" aria-describedby="emailHelp" placeholder="Digite o Produto">
		<small id="emailHelp" class="form-text text-muted">Informe a Descrição do Produto.</small>
	</div>
	</div>
	<div class="col-sm-4">
	<div class="form-group">
		<label for="exampleInputPassword1">Preço</label>
		<input type="text" class="form-control" name="Valor" placeholder="Digite o Valor">
		<small id="emailHelp" class="form-text text-muted">Informe o Valor do Produto.</small>
	</div>
	</div>
	<div class="col-sm-4">
	<div class="form-group">
		<label for="exampleInputPassword1">Quantidade</label>
		<input type="text" class="form-control" name="Quantidade" placeholder="Digite a Quantidade">
		<small id="emailHelp" class="form-text text-muted">Informe a Quantidade do Produto.</small>
	</div>
	</div>
</form>	
		<div id="but">
		<button type="submit" class="btn btn-success">Cadastrar Produto</button>
		<button type="button" class="btn btn-danger" onclick="redirect()">Listar Ordem Crescente</button>
		<button type="button" class="btn btn-primary" onclick="redirect1()">Listar Ordem Decrescente</button>
		<button type="button" class="btn btn-warning"><a href="http://localhost/Atividade3_Walter/log.php"> <font color="white">Destruir Sessão</button></a></font>
		</div>
</div>	

				
</body>
</html>



