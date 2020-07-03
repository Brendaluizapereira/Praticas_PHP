<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
	
</head>
	<body>

		<?php

 
	function calcularIRPF($salario) {

		switch($salario) { 

			case $salario <= '1.903.98': 

			return "A alíquota é " . ($salario * 7.5/100) ; 

			break;

		}
	}

	calcularIRPF(900) ; 
	?> 

	<!--<?php 
		/*echo 'Comando echo<br />';

		print('Comando Print';)*/
	?>

	<-->

	<!-- <p>Posso doar sangue?</p>

	<?php

	$idade//  = 19
	$peso // = 72

	/* echo ($idade >= 16 && $idade <= 69) && $peso >= 50 ? 'Sim' : 'Não atende aos requisitos' ;  
	?>-->

</body>
</html>

	?> 
	</body>
</html>

