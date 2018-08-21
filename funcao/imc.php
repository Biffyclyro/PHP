<?php
	
	include 'calcularMassa.php';

	$totalConsul = 0;
	
	$resultado = massaCorporal(70, 1.85);
	echo 'Resultado + 10:  ', $resultado + 10, '<br>';
	echo massaCorporal(60, 1.95), '<br>';
	echo massaCorporal(90, 1.65), '<br>';
	echo $totalConsul;

?>