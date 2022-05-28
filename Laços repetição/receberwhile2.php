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
    while ($i <= $valor){
        $fatorial *= $i;
        $i++;
    }

    echo "O fatorial desse número é ".$fatorial;

?>
</p>
</body>
</html>