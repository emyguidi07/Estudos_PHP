<html>
<head>
<title>Resposta-exercício1</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];
$i = 1;

do{
    echo $i;
    echo "<br>";
    $i ++;
} while ($i <= $valor)
?>
</p>
</body>
</html>