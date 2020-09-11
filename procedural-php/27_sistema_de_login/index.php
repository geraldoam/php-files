<?php

// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

// Verificação se houve ação do post.
if (isset($_POST['btn-entrar'])) {
	$erros = array();
	// Filtro com mysqli
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	if (empty($login) or empty($senha)) {
		$erros[] = "<li> O campo login/senha precisa ser preenchido. </li>";
	} else {
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";
		$resultado = mysqli_query($connect, $sql);

		if (mysqli_num_rows($resultado) > 0) {
			$senha = md5($senha);
			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($connect, $sql);

			if (mysqli_num_rows($resultado) == 1) {
				$dados = mysqli_fetch_array($resultado);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('Location: home.php');
			} else {
				$erros[] = "<li> Usuário e Senha não conferem. </li>";
			}
		} else {
			$erros[] = "Não há ninguém registrado com as informações passadas.";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<?php
		if (!empty($erros)) {
			foreach ($erros as $erro) {
				echo "<li> $erro </li>";
			}
		}
	?>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" accept-charset="utf-8">
		Login: <input type="text" name="login">
		Senha: <input type="password" name="senha">
		<button type="submit" name="btn-entrar">Entrar</button>
	</form>
</body>
</html>