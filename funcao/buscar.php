<?php 
	
	$conexao = mysqli_connect('localhost','root', '');

	mysqli_select_db($conexao, 'mercado');

	mysqli_query($conexao, 'SET CHARACTER SET utf8');

	$resultado = mysqli_query($conexao, "SELECT * FROM funcionario");

	if($resultado){
		while($resultadoSeparado = mysqli_fetch_assoc($resultado)){
			echo '<br>Codigo: ', $resultadoSeparado['codigo'], '<br>Nome: ', $resultadoSeparado['nome'], '<br>Cargo: ', $resultadoSeparado['cargo'];
		}
	}	
	
	mysqli_close($conexao);

?>