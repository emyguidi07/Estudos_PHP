<html>
<head>
<title>Resposta-exercício4</title>
</head>
<body>
<p>
<?php 
$valor = $_POST["valorCampo"];
$fatorial=1;
for($i=1; $i<=$valor; $i ++){
    $fatorial *= $i;
}
echo "O fatorial desse número é ".$fatorial;

?>
</p>
</body>
</html>