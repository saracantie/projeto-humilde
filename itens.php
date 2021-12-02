<?php
 require "includes/autentica.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P C E . - Itens</title>
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
        <table border="1">
            <tr>
                <td>ITEM</td>
                <td>PRAZO (EM SEMANAS) </td>
                <td>CONTATO</td>
                
            </tr>
            <?php
            
            include "includes/conecta.php";
            
            $sql ="SELECT nome_item, semanas, contato FROM itens";
            
            $res = mysqli_query($con, $sql);
            
            //array associativo
            while($row = mysqli_fetch_assoc($res)){
                echo    "<tr>
                        <td>". $row['nome_item'] ."</td>
                        <td>". $row['semanas']."</td>
                        <td>". $row['contato']."</td>
                        <td>-(LINK P EMPRESTAR)</td>
                        </tr>";
            }
            
            
            ?>
        </table>
    </main>
    
    <footer>
        <p> - Sara Otazu Cantie - </p>
    </footer>
</body>
</html>