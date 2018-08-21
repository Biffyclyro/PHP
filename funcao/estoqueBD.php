<?php 
	$conexao = mysqli_connect('localhost','root', '');

	mysqli_select_db($conexao, 'mercado');

	mysqli_query($conexao, 'SET CHARACTER SET utf8');

	mysqli_query($conexao, "INSERT INTO estoque (produto, quantidade) VALUES('Macarrão', 100), ('Molho', 85), ('Ervilha', 174), ('Milho', 5), ('Bolacha',99)");

	mysqli_close($conexao);

?>