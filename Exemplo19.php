<html>
<head>
<title>Exemplo 19</title>
</head>
<body bgcolor=#675489>
<center>
	<form method='get' action=' '>
	Login: <input type='text' size='20' name='login'><br>
	Senha: <input type='password' size='20' name='senha'><br><br>
	<input type='submit' value='Enviar'><br>
	<?php
	 if(isset($_GET['login'])){
	 	echo $_GET['login'].'<br>';
	 	echo $_GET['senha'].'<br>';
	 }
	?>
	</form>
	</center>
</body>
</html>