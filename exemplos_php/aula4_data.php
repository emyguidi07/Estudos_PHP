<html>
<title> Desenvolvendo PHP</title>
<body>

<?php
    $data= date("d/m/Y", time());
    $hora= date("h:i", time());
    echo '<p align=center> <font color= #4682B4 > Hoje é dia </font></p>'. $data;
    echo '<p align=center> <font color= #4682B4> e agora são </font></p>'. $hora;
?>

</body>
</html>