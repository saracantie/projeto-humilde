

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P C E . - Projeto Coisas Emprestadas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>   
    <header>
        <h1>P C E .</h1>
        <h2>Projeto Coisas Emprestadas</h2>
    </header>
    <div id="login">
        <?php
            if(isset($_GET['erro'])){
                echo '<p style="text-align:center;color:red;">Usuário ou senha incorretos</p>';
            }
            if(isset($_GET['tchau'])){
                echo '<p style="text-align:center;color:red;">Cadastro exlcluído ):</p>';
            }
        
        ?>
        <form method="post" action="recebelogin.php"> 
            <p> 
              <label for="email_login">Seu E-mail</label>
              <input id="email_login" name="email_login" required="required" type="text" placeholder="ex. euzinha@gmail.com"/>
            </p>
             
            <p> 
              <label for="senha_login">Sua Senha</label>
              <input id="senha_login" name="senha_login" required="required" type="password" placeholder="********" /> 
            </p>
             
            <p> 
              <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
              <label for="manterlogado">Manter-me logado</label>
            </p>
             
            <p> 
              <input type="submit" value="Logar" /> 
            </p>
             
            <p class="centralizado">
              Ainda não tem conta?
              <a href="cadastro.php">Cadastre-se</a>
            </p>
          </form>        
    </div>
    <footer>
        <p> - Sara Otazu Cantie - </p>
    </footer>
</body>
</html>