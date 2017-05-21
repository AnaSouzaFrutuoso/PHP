<!DOCTYPE html>
<html>
<head>
	<title>Exemplo 14.2</title>
</head>
<body bgcolor=#345678>
<center>

	<?php
	function testeGlobal(){
global $a;
$a=25;
}
echo"<h1>variável Global</h1>";
$a=0;
testeGlobal();
echo"Valor da Variável a = $a";
	  ?>
	  
</center>
</body>
</html>