
<?php
// obtém os valores digitados evitar ataques de SQL Injection
$email = $conexao -> real_escape_string($email); 
$senha = $conexao -> real_escape_string($senha);
// acesso ao banco de dados
$resultado = $conexao ->query("SELECT * FROM usuarios WHERE email='$email'");
$linhas = $resultado->num_rows; if($linhas==0)
{
// testa se a consulta retornou algum registro echo "<html><body>";
    echo "<p>E-mail não encontrado!</p>";
    echo "<p><a href=\"login.html\">Voltar</a></p>";
    echo "</body></html>"; }
    else {
     $dados = $resultado->fetch_array();
     $senha_banco = $dados["senha"];
     if ($senha != $senha_banco)
         {
         // confere senha
         echo "<html><body>";
         echo "<p>A senha está incorreta!</p>";
         echo "<p><a href=\"login.html\">Voltar</a></p>";
         echo "</body></html>";
         }
         else
             {
             // usuário e senha corretos. Vamos criar os cookies
              setcookie("email_usuario", $email); setcookie("senha_usuario", $senha); // direciona para a página inicial dos usuários cadastrados
              header  ("Location: pagina_inicial.php"); } } $conexao->close();
?>