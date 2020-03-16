<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link rel="stylesheet" type="text/css" href="view/estilo.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
  </head>
  <body>
    
    <!-- painel apresentalve jumbotron bootstrap -->
      <div id="painel">
        <div class="jumbotron jumbotron-fluid">
          <!--img src="view/img4.jpg"/-->
            <div class="container">
                <h1 class="display-4">Fluid jumbotron</h1>
                    <p class="lead">Este é um jumbotron modificado que ocupa todo o espaço horizontal de seu elemento pai.</p>
            </div>
        </div>
      </div>
    <!-- Formulário do materialize -->
  <form action="controller/DadosLogin.php" method="POST">
    <div id="conteiner">
    
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="user">
          <label for="icon_prefix">User Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_telephone" type="password" class="validate" name="password">
          <label for="icon_telephone">Password</label>

    <!-- botão entrada materialize -->
  
        <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
            <i class="material-icons right">send</i>
        </button>
        <p>
        <div id="cadastro">Não tem Conta ? <a href="http://www.erikasarti.com/html/tabela-cores/">Cadastre-se</div>
        </p>
  </div>

        
    </div>
</form>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>