<html>
<head>
<title>Resposta-exercício1</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];

for ($i= 0; $i <= $valor; $i ++){
    echo $i;
    echo "<br>";
}
?>
</p>
</body>
</html>