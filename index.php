<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
	
</head>
<body>
	<?php 
		echo 'utilizando a tag padrão' ;
	?>

		<br />
		
	<?= 
		'utilizando a tag impressão' ;
	?>

	<!--Aula variaveis-->
	<?php
		//string
		$nome = 'Brenda Luiza Pereira';
	?>
	<h1>Ficha cadastral</h1>
	<br />

	<!--Usando a tag de impressão ou tag php para imprimir nome na tela-->
	<p>Nome: <?= $nome?> </p>
	<p>Nome: <?php print $nome?> </p>

	<!--Aula concatenar-->

	<?php

		// concatenando com operador ponto ..
		$nome = 'Laura';
		$cor = 'preto'

		echo 'Olá' . $nome . ', vi que você gosta da cor' . $cor .; 

		// com aspas duplas, pode usar a variável direto dentro da string

		echo "Olá, $nome, vi que você gosta da cor $cor" ;
	?>

		<!--Aula variaveis constantes-->

		<?php
			define('BD_URL', 'endereco_bd_dev')

			define('BD_USUARIO', 'usuario_dev')

			//recuperando a variavel constante e quebrando a linha
			echo BD_URL . '<br />';
		?>

		<!--Aula operadores de comparacao-->

		<?php
			//condicao pode ser true ou false

			if(2 ==='2') {
				echo 'Verdadeiro' ;
			} else {
				echo 'Falso';
			} //falso

			if('a' = 'a') {
				echo 'Primeira instrucao';
				echo 'Segunda instrucao' ;
				echo 'Terceira instrucao' ;
			}

			//operadores logicos
			// && - AND
			// OR ou ||
			// XOR - exclusive OR
			//! - negação

			$cartao_loja = true;
			$vlr_compra = 25;

			$vlr_frete = 50;
			$recebeu_desconto = false;

			if($cartao_loja = true && $vlr_compra >= 20) {
				$vlr_frete = 0;
				$recebeu_desconto = true
			}


		?>

		<h1>Detalhes do pedido</h1>

		<p>Possui cartão da loja?

			<?php
				if($cartao_loja = true) {
					echo 'SIM'
				} else {
					echo 'NÃO'
				}
			?>
		</p>

		<p>Valor da compra: <?=$vlr_compra ?></p>

		<p>Recebeu desconto no frete?

			<?php
				if($recebeu_desconto = true) {
					echo 'SIM'
				} else {
					echo 'NÃO'
				}
			?>
		</p>

		<p>Valor do frete: <?=$vlr_frete ?></p>

		<!--Operadores ternarios-->
		<?php
			//<condicao> ? true : false

		$cartao_loja ? 'Sim' : 'Não'
		?>

		<p>Possui cartão da loja?</p>
		<?= $cartao_loja ? 'Sim' : 'Não' ; ?>

		<p>Recebeu desconto no frete?

		<?= $teste = $desconto_frete ? 'Sim' : 'Não' ; ?></p>

		<?php
			//encadeando operadores ternarios
			$vlr_frete_aux = $cartao_loja && $vlr_compra >=20 ? 0 : ($cartao_loja && $vlr_compra >= 15 ? 10 : ($cartao_loja && $vlr_compra >= 10 ? 5 : vlr_frete));

			$recebeu_desconto = $vlr_frete != vlr_frete_aux ? true : false ; 
		?>

		<!--Switch-->

		<?php

		$parametro = 2;
		switch ($parametro) {

			case 1:
			'Entrou no case 1'

		break;

			case 2:
			'Entrou no case 2'

		break;

			default:

		break;
		}

		//casting - mudando tipo da variavel

		$valor = 10;
		$valor2 = (float) $valor;
		//dentro dos parenteses, colocar o tipo que vc quer... ex: int, string...
		echo gettype($valor) ; //integer
		echo gettype($valor2) ; // double(float)
		?>
	</body>
</body>
</html>