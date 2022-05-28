<html>
<head>
<title>Resposta-exercício1</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];
$i = 1;

while ($i <= $valor){
    echo $i;
    echo "<br>";
    $i ++;
}
?>
</p>
</body>
</html>