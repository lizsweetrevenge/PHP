<!DOCTYPE html>
<html>
<head>
<title>Consulta de Usuários</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<form name="form1" method="post" action="teste_seleciona.php">
<br>
<?php
	require_once("conn.php");
	$sql=mysqli_query($conn,"SELECT * FROM usuarios");

while($linha=mysqli_fetch_array($sql))
	{
    	$id=$linha['id'];
    	$usuario=$linha['usuario'];
    	$senha=$linha['senha'];
    	$nivel=$linha['nivel'];

    	echo"<br><br>";

    	echo "<table><tr><td>Id do Usuário</td><td>$id</td>";
    	echo "<tr><td>Usuário</td><td>$usuario</td>";
    	echo "<tr><td>Senha </td><td>$senha</td>";
    	echo "<tr><td>Nivel </td><td>$nivel</td></tr></table>";
	}
?>
</form>
</body>
</html>
