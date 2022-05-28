<html>
<head>
<title>Resposta-exercício3</title>
</head>
<body>
<p>
<?php 
$kg = $_POST["kg"];
$multa = ($kg - 50)*4;
if ($kg > 50){
    echo "Sua multa é de R$".$multa;
}

else {
    echo "Você está dentro da lei! Mas, cuidado, continue pescando até 50 kg de peixe!";
}
?>
</p>
</body>
</html>