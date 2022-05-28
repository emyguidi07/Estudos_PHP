<html>
<head>
<title>Resposta-exercício2</title>
</head>
<body>
<p>
<?php 
$sexo = $_POST["sexo"];
$idade = $_POST["idade"];
$nome = $_POST["nome"];

    if (($sexo == 'F') && ($idade <= 25)){
    echo "$nome, você está ACEITA!".aprova();
}
    else {
    echo "$nome, você está NÃO ACEITA!".naprova();
}

function aprova(){
    return  " Parabéns pela aprovação!";
   }
   function naprova(){
    return  " Infelizmente, não passou!";
   }
?>
</p>
</body>
</html>