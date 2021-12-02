<?php

    
    
//RECEBE DO CADASTRO
    $id = $_POST["id"];
    $nomecad = $_POST["nome_cad"];
    $emailcad = $_POST["email_cad"];
    $senhacad = $_POST["senha_cad"];
    
    include "includes/conecta.php";
    
    //SE FOR CADASTRO OU EDIÇÃO
    if (empty($id)){
    
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nomecad', '$emailcad', '$senhacad')";
        
        //envia o cod sql para o banco de dados
        $res = mysqli_query($con, $sql);
        
        if($res){
            header("Location: emprestimos.php");
        }
        else{
            echo "ERRO AO CADASTRAR";
            
        }
    
    }
    else{
        $sql = "UPDATE usuarios SET nome = '$nomecad', email ='$emailcad', senha = '$senhacad' WHERE id = $id";
        $res = mysqli_query($con, $sql);
        
        if($res){
            header("Location: emprestimos.php");
        }
        else{
            echo "ERRO AO ATUALIZAR";
            header("Location: paginicial.php");
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /*
    //$con = mysqli_connect("localhost", "root", "", "atp");
    
    $valido = true;
    
    try {
        $con = new PDO("mysql:host=localhost; dbname=atp", "root", "");
        $con->exec("set names utf8");
    }
    catch(PDOException $e {
        echo "Falha: " . $e->getMessage();
        exit();
    }
    $sql = "INSER INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    
    $stmt = $con->prepare($sql);
    
    $stmt->bindParam(1, $_POST['nome']);
    $stmt->bindParam(2, $_POST['email']);
    
    
    $senhaHash = md5($_POST['senha']);
    $stmt->bindParam(3, $senhaHash);
    
    
    
    
    
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
     //if email ja existir colocar msg que email ja cadastrado
     //else se nao existir insert na tabela dados
     //else se no login o email nao estiver cadastrados mostrar msg email nao cadastrado
    $sql = "INSER INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
    $res = mysqli_query($con, $sql);
    
    //percorre os registros da tabela
    while($row = mysqli_fetch_assoc($res)){
        
    }
    
    //pro usuario editar seus dados no Meu Perfil:
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res)
    }
    //tabela usuarios: id, nome, email, senha
    
    //tabela itens: id, nome item, descrição item, cidade e estado onde esta, dono, email do dono, por qts semanas empresta
    
    // Inicia sessões
session_start();

// Recupera o login
$email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

// Usuário não forneceu a senha ou o login
if(!$email || !$senha)
{
	echo "Você deve digitar seu login e senha!";
	exit;
}

/**
* Executa a consulta no banco de dados.
* Caso o número de linhas retornadas seja 1 o login é válido,
* caso 0, inválido.

$SQL = "SELECT id, nome, email, senha
FROM usuarios
WHERE email = "" . $email . """;
$result_id = @mysql_query($SQL) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_id);

// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($total)
{
	// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
	$dados = @mysql_fetch_array($result_id);

	// Agora verifica a senha
	if(!strcmp($senha, $dados["senha"]))
	{
		// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário
		$_SESSION["id_usuario"]= $dados["id"];
		$_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
		$_SESSION["permissao"]= $dados["postar"];
		header("Location: emprestimos.php");
		exit;
	}
	// Senha inválida
	else
	{
	 "Senha inválida!";
	exit;
	}
}
	// Login inválido
else
{
	echo "O email fornecido não está cadastrado!";
    
    
    
    
    // Inicia sessões
session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"]))
{
// Usuário não logado! Redireciona para a página de login
header("Location: index.html");
exit;
}
*/

?>