<html>
<head>
<title>Resposta-exercício1</title>
</head>
<body>
<p>
<?php 
$senha = $_POST["senha"];
if ($senha == "batatafrita"){
    echo "Acesso permitido";
}

else {
    echo "Acesso negado";
}
?>
</p>
</body>
</html>