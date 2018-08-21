<?php 
	
	
	$nomeFuncionario = 'Maria';
	$horas = 9;

	switch ($nomeFuncionario) {
		case 'Mateus':
			echo 'Nome do funcionário: Mateus', '<br>';
			echo "Horas extras: $horas", '<br>', '<br>';
			echo 'Trabalhe Sem Parar', '<br>';
			echo 'Mateus R$', 2000+100*$horas, '<br>';
			echo 'Maria R$', 1500-10*$horas, '<br>';
			echo 'Carlos R$', 1000-10*$horas, '<br>';
			break;
		
		case 'Maria':
			echo 'Nome do funcionário: Mateus', '<br>';
			echo "Horas extras: $horas", '<br>', '<br>';
			echo 'Trabalhe Sem Parar', '<br>';
			echo 'Mateus R$', 2000-10*$horas, '<br>';
			echo 'Maria R$', 1500+100*$horas, '<br>';
			echo 'Carlos R$', 1000-10*$horas, '<br>';
			break;	

 		case 'Carlos':
 			echo 'Nome do funcionário: Mateus', '<br>';
			echo "Horas extras: $horas", '<br>', '<br>';
			echo 'Trabalhe Sem Parar', '<br>';
			echo 'Mateus R$', 2000-10*$horas, '<br>';
			echo 'Maria R$', 1500-10*$horas, '<br>';
			echo 'Carlos R$', 1000+100*$horas, '<br>'; 		
 			break;

		default:
			echo 'Funcionário não existe!!!';
			break;
	}


?>