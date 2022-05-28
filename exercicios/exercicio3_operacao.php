<html>
<head>
<title>Exercício 3</title>
</head>
<body>
    <form method = "post" action="receberoperacao.php">
        <fieldset>
            <legend>
                 Dados : 
            </legend>
            <label> Digite o primeiro número:</label>
                <input type="text" name="num1"><br>
            <label> Digite o segundo número:</label>
                <input type="text" name="num2"><br>
                Digite a operação que deseja realizar:<select name="ope">
                <option value="*">Multiplicação</option>
                <option value="+">Adição</option>
                <option value = "-">Subtração</option>
                <option value = "/">Divisão</option><br>
                <input type= "submit" value="Enviar" />
                </select> </br>
        </fieldset>
    </form>
</body>
</html>