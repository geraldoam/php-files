<!DOCTYPE html>
<html>
<head>
	<title>Formularios</title>
</head>
<body>

<?php  

/*

Sanatização

	FILTER_SANATIZE_ESPECIAL_CHARS
	FILTER_SANATIZE_INT
	FILTER_SANATIZE_EMAIL
	FILTER_SANATIZE_URL

*/

?>


<?php 
	if (isset($_POST['enviar-formulario'])) {
		
		$erros = array();

		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANATIZE_ESPECIAL_CHARS);

		$idade = filter_input(INPUT_POST, 'idade', FILTER_SANATIZE_INT);
		if (!filter_var($idade, FILTER_VALIDATE_INT)) {
			$erros[] = "Idade precisa ser um número inteiro."
		}

		$email = filter_input(INPUT_POST, 'email', FILTER_SANATIZE_EMAIL);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$erros[] = "Email inválido."
		} 

		$url = filter_input(INPUT_POST, 'url', FILTER_SANATIZE_URL);
		if (!filter_var($url, FILTER_VALIDATE_EMAIL)) {
			$erros[] = "URL inválida."
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

	Nome: <input type="text" name="nome"> <br>
	Idade: <input type="text" name="idade"> <br>
	Email: <input type="email" name="email"> <br>
	URL: <input type="text" name="url"> <br>

	<button type="submit" name="enviar-formulario">Enviar</button> <br>

</form>

</body>
</html>