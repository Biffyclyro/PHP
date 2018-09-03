<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Media Aluno</title>
		<style>
			span.aprovado{
				color: #0000ff;				
			}
			span.exame{
				color: #EEAD2D;;
			}
			span.reprovado{
				color: #ff0000;
			}

		</style>
	</head>
	<body>
		<?php 
			$nota1= $_POST["nota1"];
			$nota2= $_POST["nota2"];

			$media =($nota1+$nota2)/2;
			echo $media, '<br/>';

			if($media >=7){
				echo "<span class='aprovado'>Aprovado</span>";
			}elseif($media < 7 && $media >=6){
				echo "<span class='exame'>Exame</span>";
			}else{
				echo "<span class='reprovado'>Reprovado</span>";
			}


		?>
		<br/><a href="index.html">Voltar!</a>

	</body>
</html>