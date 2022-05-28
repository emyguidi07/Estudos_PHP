<html>
<head>
<title>Resposta-exercício3</title>
</head>
<body>
<p>
<?php
$num1 = $_POST["num1"];

    function tabuada($num1)
    {
        if ($num1 > 1 && $num1 < 10) {
            for ($i = 1; $i <= 10; $i++) {
                $tabuada = $num1 * $i;
                echo "<table> <tr> <td> {$num1} x {$i} = " . $tabuada . "</td> </tr> </table>";
                echo "<br>";
            }
        }
    }
    tabuada($num1);


?>
</p>
</body>
</html>