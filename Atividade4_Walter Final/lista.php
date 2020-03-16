<?php

        echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet' type='text/css' href='painel.css'>";
        echo "<table class='table table-striped'";
        echo "<tr>";
        echo "<th scope='col'>".'Descrição'."</th>";
        echo "<th scope='col'>".'Valor'."</th>";
        echo "<th scope='col'>".'Quantidade'."</th>";
        echo "</tr>";
        
        $conn = new PDO('mysql:host=localhost;port=3307; dbname=atividade', 'root', '');
        $result = $conn->query("SELECT * FROM produto ORDER BY preco");


    while($registro = $result->fetch()){
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