<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Faça o Login</title>
</head>
<body>

<!-- Formulário de Login -->
	<form action="validacao.php" method="post">
	<fieldset>
	<legend>Dados de Login</legend>
		<label for="txUsuario">Usuário</label>
		<input type="text" name="usuario" id="usuario" maxlength="25" />
		<label for="txSenha">Senha</label>
		<input type="password" name="senha" id="senha" />

		<input type="submit" name="Entrar" />
	</fieldset>
	</form>

</body>
</html>