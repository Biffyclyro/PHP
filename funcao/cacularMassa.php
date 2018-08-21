<?php 

	function massaCorporal($peso, $altura){
		global $totalConsul;
		$totalConsul++;
		return number_format($peso / ($altura * $altura),2);
		
	}
	

?>