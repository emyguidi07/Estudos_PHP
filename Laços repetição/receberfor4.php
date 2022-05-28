<html>
<head>
<title>Resposta-exercício4</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];

for ($i= 0; $i < 11; $i ++){
    echo "$i X $valor = ".$i*$valor;
    echo "<br>";
}
?>
</p>
</body>
</html>