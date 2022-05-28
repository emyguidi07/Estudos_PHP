<html>
<head>
<title>Resposta-exercício3</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];
$i=0;
$soma = 0;

do{
    $soma += $i;
    $i++;
} while ($i <= $valor); 

echo "Soma dos antecessores desse número = ".$soma;
echo "<br>";
?>
</p>
</body>
</html>