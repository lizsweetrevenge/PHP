<?php

	// Verifica se houve POST e se o usuário ou a senha é (são) vazio(s)
	if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha'])))
	{
		header("Location: index.php");
		exit;
	}

	else
	{
		require_once("conn.php");
		$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);

		// Validação do usuário/senha digitados
		$sql = "SELECT id, usuario, nivel FROM usuarios WHERE (usuario = ' ".$usuario ." ') AND (senha = ' ". ($senha) .' ")";
			
	}