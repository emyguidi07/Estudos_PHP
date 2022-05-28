<html>
<head>
<title>Resposta-exercício3</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];
$i=1;
$soma = 0;

while ($i <= $valor){
    $soma += $i;
    $i++;
} 

echo "Soma dos antecessores desse número = ".$soma;
echo "<br>";
?>
</p>
</body>
</html>