<?php
 require "includes/autentica.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P C E . - Meus Dados</title>
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
      <ul>  
    <?php        
            
     
    include "includes/conecta.php";
    $id = $_SESSION['id']; 
    $sql = "SELECT id, nome, email, senha FROM usuarios WHERE id = $id";
    
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
                echo    "
                        <li>Nome: ". $row['nome'] ."</li>
                        <li>Email: ". $row['email']."</li>
                        <li>Senha: ". $row['senha']."</li>
                        ";
            


      echo"
      <br/>
      </br>
    
      
     <li><a href='cadastro.php?id=". $row['id'] ."'>Editar</a></li>
     <li><a href='excluicadastro.php?id=". $row['id']."' >Excluir Perfil</a></li> ";
                
            
     
    ?>
   </ul>     
    </main>

    <footer>
        <p> - Sara Otazu Cantie - </p>
    </footer>
</body>
</html>