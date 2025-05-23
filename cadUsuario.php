<?php

	// A sessão precisa ser iniciada em cada página diferente
	if (!isset($_SESSION)) session_start();

	// Verifica se não há a variável da sessão que identifica o usuário
	if (!isset($_SESSION['UsuarioID']) OR $_SESSION['UsuarioNivel']!=1) {
    	// Destrói a sessão por segurança
    	session_destroy();
    	// Redireciona o visitante de volta pro login
    	header("Location: index.php"); exit;
	}

	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro do Usuário</title>
</head>

<body>

<form name="form1" method="post" action="cadUsuario.php">
	<table>
	<tr><td>Usuário</td><td><input type="text" name="txt_usuario"></td></tr>
	<tr><td>Senha</td><td><input type="text" name="txt_senha"></td></tr>
	<tr><td>Nivel</td><td><input type="text" name="txt_nivel"></td></tr>
	</table>

	<input type="submit" name="Submit" value="Cadastrar"><p>

</form>


<?php
	
	require_once('conn.php');


	$usuario=$_POST['txt_usuario'];
	$senha=$_POST['txt_senha'];
	$nivel=$_POST['txt_nivel'];

	if (empty($usuario) || empty($senha) || empty($nivel))
	{
    	echo "Por favor, preencha todos os dados";
	}
	else
	{
    
	$insere=mysqli_query($conn, "INSERT INTO usuarios(usuario,senha,nivel) values('$usuario','$senha','$nivel')") or die(mysqli_error($conn));
	
	echo "Cadastrado";
	}
?>

</body>
</html>
