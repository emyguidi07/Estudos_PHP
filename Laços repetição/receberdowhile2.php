<html>
<head>
<title>Resposta-exercício4</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];
$fatorial=1;
$i=1;
    do{
        $fatorial *= $i;
        $i++;
    }while ($i <= $valor);

    echo "O fatorial desse número é ".$fatorial;

?>
</p>
</body>
</html>