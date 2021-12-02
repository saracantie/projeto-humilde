<?php
include "includes/conecta.php";


$id = "";
$nome = "";
$email = "";
$senha = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
    $nome = $row['nome'];
    $email = $row['email'];
    $senha = $row['senha'];
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Novo Usuário</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>    
    <header>
        <h1>P C E .</h1>
        <h2>Projeto Coisas Emprestadas</h2>
    </header>
    <div id="cadastro">
        <form method="post" action="recebecadastro.php"> 
                <h1 class="centralizado">Cadastro</h1>
                
                <input type="hidden" name="id" value="<?php echo $id ?>"/>
               
              <p> 
                <label for="nome_cad">Seu Nome</label>
                <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="nome" value="<?php echo $nome ?>"/>
              </p>
               
              <p> 
                <label for="email_cad">Seu E-mail</label>
                <input id="email_cad" name="email_cad" required="required" type="email" placeholder="ex. euzinha@gmail.com" value="<?php echo $email ?>"/> 
              </p>
               
              <p> 
                <label for="senha_cad">Sua Senha</label>
                <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="ex. 1@2A3¬4" value="<?php echo $senha ?>"/>
              </p>
               
              <p> 
                <input type="submit" value="Cadastrar"/> 
              </p>
               
              <p class="centralizado">  
                Já tem conta?
                <a href="index.php"> Ir para Login </a>
              </p>
            </form>        
    </div>
    <footer>
        <p> - Sara Otazu Cantie - </p>
    </footer>
</body>
</html>