<html>
<head>
<title>Resposta-exercício4</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];
$soma= 0;
for($i=1; $i<=$valor; $i ++){
    $soma += $i;
}

    echo "Soma dos antecessores desse número é ".$soma;

?>
</p>
</body>
</html>