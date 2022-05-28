<html>
<head>
<title>Resposta-exercício4</title>
</head>
<body>
<p>
<?php 
$dis = $_POST["disc"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nome = $_POST["nome"];
$m= ($nota1 + $nota2 + $nota3)/3;
if (($nota1<=10)&& ($nota2<=10)&& ($nota3<=10)){
    echo "Seu boletim nesta área:".nota($m,$nome,$dis);
}
function nota($m,$nome,$dis){
    return " </br> Aluno: $nome </br> Disciplina: $dis </br> Média das 3 notas: $m" ;
   }
?>
</p>
</body>
</html>