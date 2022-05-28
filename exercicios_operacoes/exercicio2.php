<html>
<title> Exercício 2 em php</title>
<body>
<?php
echo "</br>";
$nome = 'Fulano';
$qtd = 10;
$valor= 1000;
$total=$valor*$qtd;
?>
<h2>Vendas</h2>
<p>
<?php
echo $nome. " fez uma venda de R$ ". $total;
?>
</p>
</body>
</html>