<html>
<head>
<title>Resposta-exercício1</title>
</head>
<body>
<p>
<?php 
$num = $_POST["num"];
if ($num < 0){
    echo "Valor negativo";
}
else if ($num == 0){
    echo "Igual a zero";
}
else {
    echo "Valor positivo";
}
?>
</p>
</body>
</html>
