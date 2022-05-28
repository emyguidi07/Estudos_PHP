<html>
<head>
<title>Resposta-exercício4</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];
$i=0;

do{
    $i ++;
    echo "$i X $valor = ".$i*$valor;
    echo "<br>";
} while ($i < 11);
?>
</p>
</body>
</html>