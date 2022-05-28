<html>
<head>
<title>Resposta-exercício4</title>
</head>
<body>
<p>
<?php 
$A = $_POST["num1"];
$B = $_POST["num2"];
if ($A <= $B){
    echo "Ordem crescente: ".$A. " ". $B;
}

else{
    echo "Ordem crescente:: ".$B." ". $A;
}
?>
</p>
</body>
</html>