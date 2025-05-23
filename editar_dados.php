
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Editar Dados</title>
</head>
<body>
	<?php

error_reporting(0);
ini_set("display_errors", 0 );

$id = $_GET['id']; // Recebendo o valor vindo do link

require_once("conn.php");

$resultado = mysqli_query($conn, "SELECT * FROM usuarios WHERE id = '".$id."'"); // A variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
while($linha = mysqli_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
{
	?>
	<form method="post" action="editar_dados2.php">
	<input type="hidden" name="idc" value="<?php echo $linha['id']; ?>"> <!- passando o valor da id em um campo oculto ->
	<table>
	
		<tr><td>Usuário:</td><td><input type="text" name="usuario" value="<?php echo $linha['usuario']; ?>"> </td><td><!- mostrando dentro do form o valor do campo nome ->
		<tr><td>Senha:</td><td><input type="text" name="senha" value="<?php echo $linha['senha']; ?>"> </td><td><!- mostrando dentro do form o valor do campo email ->
		<tr><td>Nível:</td><td><input type="text" name="nivel" value="<?php echo $linha['nivel']; ?>"> </td></tr>
	</table>

		<input type="submit" value="Editar">
	</form>
	<?php
}
?>
</body>

</html>