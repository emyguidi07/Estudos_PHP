<html>
<head>
<title>Resposta-exercício4</title>
</head>
<body>
<p>
<?php 
$idade = $_POST["idade"];
if (($idade > 5) && ($idade < 7)){
    echo "Você é Infantil A";
}
else if (($idade > 8) && ($idade < 10)){
    echo "Você é Infantil B";
}
else if (($idade > 11) && ($idade < 13)){
    echo "Você é Juvenil A";
}
else if (($idade > 14) && ($idade < 17)){
    echo "Você é Juvenil B";
}
else {
    echo "Você é Senior!";
}
?>
</p>
</body>
</html>