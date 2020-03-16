<?php

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet' type='text/css' href='painel.css'>";
echo "<table class='table table-striped'";
			echo "<tr>";
            echo "<th scope='col'>".'Descrição'."</th>";
            echo "<th scope='col'>".'Valor'."</th>";
            echo "<th scope='col'>".'Quantidade'."</th>";
			echo "</tr>";

        $conexao = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conexao, "cadastro");
		$consulta = mysqli_query($conexao,"SELECT * FROM produto ORDER BY preco");
		
		//$result = mysqli_query($conexao,$consulta);

        while($registro = mysqli_fetch_assoc($consulta)){
            $prod = $registro['nome'];
            $vlr = $registro['preco'];
            $qtd = $registro['quantidade'];
            echo "<tr>";
            echo "<td>".$prod."</td>";
            echo "<td>".$vlr."</td>";
            echo "<td>".$qtd."</td>";
            echo "</tr>";
        }
		echo "</table>"
		
?>