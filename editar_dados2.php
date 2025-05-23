
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<body>

	<?php
$id = $_POST['idc']; // Recebendo o valor id do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];


require_once("conn.php");



mysqli_query($conn,"UPDATE usuarios SET usuario='$usuario', senha='$senha', nivel='$nivel' WHERE id='".$id."'") or die("erro");

echo "Cadastro atualizado com sucesso"
?>
<p><a href="teste_consulta.php">Voltar</a>
</body>

</html>