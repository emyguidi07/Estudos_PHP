<html>
<head>
<title>Resposta-exercício1</title>
</head>
<?php
  $temp = $_POST['escolha'];
  $num = $_POST['num'];
  
  if($temp==1)
   echo "Temperatura em Farenheit: ".C($num);
  elseif($temp==2)
   echo "Temperatura em Celsius: ".F($num);
  else
   echo "Opção inválida";
   
  
  function C($temperatura){
   return ($temperatura*9/5) + 32;
  }
  function F($temperatura){
   return ($temperatura-32)*5/9;
  }
 ?>

</html>