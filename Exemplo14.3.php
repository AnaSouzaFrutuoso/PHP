<html>
<head>
<title>Exemplo 14.3</title>
</head>
<body bgcolor=#987654>
<center>
<h1>Exemplo 14.3</h1>
<?PHP
function testeStatic(){
static $a=0;
$a += 25;
echo "Valor dá Variável a = $a <br>";
}
echo"<h1>Esta é uma variável estática</h1>";
testeStatic();
testeStatic();
testeStatic();
?>
</center>
</body>
</html>