<html>
<head>
<meta charset="utf-8"/>
<title>Exemplo 05</title>
</head>
<body bgcolor=#876543>
<center>
<?php
echo "<h1>Operadores de Comparação</h1><br>";
$a=15;
$b=45;
$c=42.0;
echo"$b == $c",$b==$c?" verdadeiro":" falso";
echo"<br>";
echo "$a === $c",$b===$c ?" verdadeiro" : " falso";
echo "<br>";
echo "$a != $c",$b!=$c ?" verdadeiro" : " falso";
echo "<br>";
echo " $a <> $c ",$b<>$c ?" verdadeiro" : " falso";
echo "<br>";
echo " $a < $c ",$b<$c ?" verdadeiro" : " falso";
echo "<br>";
echo "$a > $c",$b>$c ?" verdadeiro" : " falso";
echo "<br>";
echo "$a <= $c",$b<=$c ?" verdadeiro" : " falso";
echo "<br>";
echo "$a >= $c",$b>=$c ?" verdadeiro" : " falso";


?>

</center>
</body>
</html>
