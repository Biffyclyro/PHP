<?php

	include 'media.php'; 
	$resultado = calcMedia(3, 5, 6, 2);

	
//	$resultado < 7 ? echo 'Exame!!' : echo 'Aprovado!!';
	echo $resultado, '<br>';
	if($resultado < 7){
		echo 'Exame!!';
	}else{
		echo 'Aprovado!!';
	}

	


?>