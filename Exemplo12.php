<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 12</title>
</head>
<body bgcolor=#973548>
<center>
<?php 
function msn(){
	$msn="Olá mundo, Bem vindo as funções do PHP!!!";
	echo"<h2>$msn</h2>";
}
function imprimir($texto){
echo"<h3>$texto</h3>";
}
msn();
imprimir("testando a função");
?>
</center>
</body>
</html>