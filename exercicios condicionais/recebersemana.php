<html>
<head>
<title>Resposta-exercício5</title>
</head>
<body>
<p>
<?php 
$dia = $_POST["semana"];
switch($dia)
{
    case 1:
        echo "1- É domingo";
    break;
    case 2:
        echo "2- É segunda-feira";
    break;
    case 3:
        echo "3- É terça-feira";
    break;
    case 4:
        echo "4- É quarta-feira";
    break;
    case 5:
        echo "5- É quinta-feira";
    break;
    case 6:
        echo "6- É sexta-feira";
    break;
    case 7:
        echo "3- É sábado";
    break;
    default: echo "Número inválido";
}
?>
</p>
</body>
</html>