<html>
<head>
<title> PHP para a atividade</title>
</head>
<body>
<h2> Dados pessoais: </h2>
<p>
<?php 
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$cidade= $_POST["cid"];
$estado= $_POST["estado"];
echo "Seu nome é: ".$nome."</br>";
echo "Seu endereço é: ".$endereco."</br>";
echo "Sua cidade é: ".$cidade." localizada no estado de ".$estado."</br>";
?>
</p>
<p>
<h2> Dados profissionais</h2>
<?php
$cargosselecionados= $_POST["cargos"];
foreach ($cargosselecionados as $cargos);
$areaselecionados= $_POST["area"];
foreach ($areaselecionados as $area);
$curriculo = $_POST["curriculo"];

echo "Seu cargo é: ".$cargos." na área de ".$area."</br>";
echo "Mensagem do currículo: ".$curriculo."</br>";
?>
</p>
</body>
</html>
