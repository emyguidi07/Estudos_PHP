<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width= device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <?php
        include("conexao.php");
        try {
            //codigo de comportamento arriscado - imprevisto 
            $stmt = $pdo -> prepare("Select * from tbCategoria");
            $stmt -> execute();
            while($row = $stmt -> fetch(PDO::FETCH_BOTH)){
                //executa enquanto houver registros
                echo $row['idCategoria'];
                echo $row['categoria'];
                echo "<br/ >";
            }
        }
        catch(PDOException $e){
            echo "Erro: ".$e -> getMessage();
        }
    ?>
</body>
</html>