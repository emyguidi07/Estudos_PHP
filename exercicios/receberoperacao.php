<html>
<head>
<title>Resposta-exercício3</title>
</head>
<body>
<p>
<?php 
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$ope = $_POST["ope"];
if ($ope == "+"){
    echo "Resultado: ".($num1+$num2);
}
else if ($ope == "-"){
    echo "Resultado: ".($num1-$num2);
}
else if ($ope == "*") {
    echo "Resultado: ".($num1*$num2);
}
else{
    echo "Resultado: ".($num1/$num2);
}
?>
</p>
</body>
</html>
