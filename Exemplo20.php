<?php
 if(isset($_COOKIE['contador'])){
 	$tempo=time()+(3600*24*7);
 	$valor=$_COOKIE['contador']+1;
 	setcookie('contador', $valor, $tempo);
 }else{
 	$valor=1;
 	$tempo=time()+(3600*24*7);
 	setcookie('contador', $valor, $tempo);
 }
?>
<html>
<head>
	<title>Exemplo 20</title>
	<script>
	 function visita(valor){
	 	alert (valor+" Olá, mais um visitante!");
	 }
	</script>
</head>
<body bgcolor=#678954>
	<?php
	 	echo "<body onload='visita($valor)'>";	 
	?>
</body>
</html>