<html>
<head>
<title>Resposta-exercício4</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];
$i=0;

while ($i <= 10){
    $i ++;
    echo "$i X $valor = ".$i*$valor;
    echo "<br>";
}
?>
</p>
</body>
</html>