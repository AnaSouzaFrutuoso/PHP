<html>
<head>
<title>Exemplo 17</title>
</head>
<body bgcolor=#678904>
<center>
<?php
echo"<h1>Lendo um vetor</h1>";
$frutas=array("Laranja","Maçã","Uva","Banana","Mamão");
foreach($frutas as $valor){
echo"<li>Fruta: $valor</li>";
}
echo"<br>";
$dados = array("nome"=>"Maria Cristina<br>" ,
"rua "=>"São João<br>" , 
"bairro "=>"Cidades dos Campos<br>" , 
"cidade"=>"São Paulo<br>");
foreach($dados as $chave => $valor)
{
echo"$chave : $valor";
}
?>
</center>
</body>
</html>