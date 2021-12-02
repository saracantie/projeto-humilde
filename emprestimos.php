<?php
 require "includes/autentica.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P C E . - Empréstimos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>P C E .</h1>
        <h2>Projeto Coisas Emprestadas</h2>
    </header>
    <nav>
        <a href="emprestimos.php">MEUS EMPRESTIMOS</a>
        <a href="itens.php">ITENS</a>
        <a href="meusdados.php">MEUS DADOS</a>
    </nav>
    <main>
        Olá, <?php echo $_SESSION['nome'] ?>!<br/>
        
        <!--se ñ tiver nada na tabela emprestimos:-->
        <p>Você não tem itens emprestados no momento!</p>
        <table>
            
        </table>
        <p>Escolha seus itens <a href="itens.php">aqui</a></p>    
        
    </main>
    <div id="logout">
        <a href="logout.php">Sair</a>
    </div>
    <footer>
        <p> - Sara Otazu Cantie - </p>
    </footer>
</body>
</html>