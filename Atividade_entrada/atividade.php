<html>
<head>
<title>Cadastro</title>
</head>
<body>
    <form method = "post" action="receberdados.php">
        <h2>Formulário</h2>
        <fieldset>
            <legend>
                 Dados pessoais: 
            </legend>
            <label> Nome:</label>
                <input type="text" name="nome"><br>
            <label> Endereço:</label>
                <input type="text" name="endereco"><br>
            <label> Cidade:</label>
                <input type="text" name="cid"><br>
                 Estado:<select name="estado">
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value = "MG">Minas Gerais</option>
                </select> </br>
        </fieldset>
        <fieldset>
            <legend>
                 Dados profissionais: 
            </legend>
                <p>Natureza do cargo</p>
                <input type="radio" name="cargos[]" value="Gerência">
                <label>Gerência</label>
                <input type="radio" name="cargos[]" value="Financeiro">
                <label>Financeiro</label>
                <input type="radio"  name="cargos[]" value="Recepçãoo">
                <label>Recepção</label>
                <input type="radio" name="cargos[]" value="Administratitvo">
                <label>Administrativo</label>
                <input type="radio" name="cargos[]" value="Jurídico">
                <label>Jurídico</label>
                <p> Área de interesse</p>
                <input type="checkbox" name="area[]" value="Computação">
                <label>Computação</label>
                <input type="checkbox" name="area[]" value="Biologia">
                <label>Biologia</label>
                <input type="checkbox" name="area[]" value="Meio ambiente">
                <label>Meio Ambiente</label>
                <input type="checkbox" name="area[]" value="Engenharia">
                <label>Engenharia</label>
                <input type="checkbox" name="area[]" value="História">
                <label>História</label>
            </select> </br>
                <label> Mini-currículo:</label>
                    <textarea  name="curriculo" rows="5" cols="33"></textarea>
        </fieldset>
                <input type= "submit" value="Enviar" />
                <input type= "reset" value="Limpar" />
    </form>
</body>
</html>