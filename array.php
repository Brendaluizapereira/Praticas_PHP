<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	/*
	//sequenciais (numericos)

	$lista_frutas = array('banana', 'maçã', 'uva');

	//incluir novo item no array já formado

	$lista_frutas [] = 'abacate';

	//fazer array de outro jeito:

	$lista_verduras = ['alface', 'rucula'];

	//duas formas de debugar:
	// tag pre serve pra deixar o array formatado
	echo '<pre>';
	var_dump($lista_frutas);
	echo '<pre>';
	echo '<hr />';
	echo '<pre>';
	print_r($lista_frutas);
	echo '<pre>';
	echo '<hr />';

	echo '<pre>';
	print_r($lista_verduras);
	echo '<pre>'; */

	//arrays associativos: ex: cria uma posição cuja chave é 'a' e o valor é 'banana'

	$lista_frutas = array (
		'a' => 'banana', 
		'b' => 'morango', 
		'c' => 'uva'); 

	// inserir novo valor dentro do array 
	$lista_frutas['d'] = 'abacate';

	echo '<pre>';
	print_r($lista_frutas);
	echo '<pre>';

	//array multidimensional 
	
	?>



</body>
</html>