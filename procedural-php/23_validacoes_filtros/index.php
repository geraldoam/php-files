<!DOCTYPE html>
<html>
<head>
	<title>Formularios</title>
</head>
<body>

<?php  
	/*
		Validações
		Funções (filter_input - filter_var)
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_URL
	*/
?>

<?php 
	if (isset($_POST['enviar-formulario'])) {
		
		$erros = array();

		if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
			$erros[] = "Idade precisa ser um inteiro.";
		}

		if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
			$erros[] = "Email está incoerente.";
		}

		if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
			$erros[] = "Peso está incoerente.";
		}

		if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
			$erros[] = "IP inválido.";
		}

		if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
			$erros[] = "URL inválida.";
		}

		if (!empty($erros)) {

			foreach ($errros as $erro) {
				echo "<li> $erro </li>";
			}

		} else {
			echo "Seus dados estão corretos.";
		}

	}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

	Idade: <input type="text" name="idade"> <br>
	Email: <input type="email" name="email"> <br>
	Peso: <input type="text" name="peso"> <br>
	IP: <input type="text" name="ip"> <br>
	URL: <input type="text" name="url"> <br>

	<button type="submit" name="enviar-formulario">Enviar</button> <br>

</form>

</body>
</html>