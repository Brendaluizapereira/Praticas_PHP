<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*$lista_coisas = [];

		$lista_coisas['frutas'] = [1 =>'banana', 2 => 'maca', 3=> 'uva'];

		$lista_coisas['pessoas'] = [1=> 'Rebeca', 2 => 'Sara', 3 => 'Laura'];

		echo '<pre>';
		print_r($lista_coisas);
		echo '</pre>';*/

		//pesquisar no array: 
		//in_array -> true or false para a existência do item
		//array_search()
		$lista_frutas = array('banana', 'maçã', 'uva');

		in_array('banana', $lista_frutas); //1; se false -> texto = vazio

		// para personalizar a resposta, pode atribuir o in array a uma var:

		$existe = in_array('abacate', $lista_frutas);

		if($existe) {
			echo 'O valor pesquisado existe neste array';
		} else {
			'Desculpe, o valor pesquisado não existe neste array'
		}

		//array search - retorna o índice do item, caso exista

		array_search('abacate', $lista_frutas);

			if($existe != null) {
			echo 'O valor pesquisado existe neste array';
			} else {
			'Desculpe, o valor pesquisado não existe neste array'
		}

		//indice associativo 'frutas' recebe o array lista_frutas, ambos dentro do array lista_coisas
		$lista_coisas = [
		'frutas' => $lista_frutas,
		'pessoas' => ['João', 'Maria']
		];
		//pesquisando dentro do array multi
		in_array('uva', $lista_coisas['frutas']);
	?>



</body>
</html>