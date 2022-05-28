<html>
<head>
<title>Resposta-exercício5</title>
</head>
<body>
<p>
<?php
$num1 = $_POST["num1"];

if ($num1 % 2 == 0){
     echo "Número par".par($num1);
}
else {
     echo "Número ímpar".impar($num1);
}


function impar($num1){
    return  "</br>".$num1;
   }
   function par($num1){
    return  "</br>".$num1;
   }

?>
</p>
</body>
</html>