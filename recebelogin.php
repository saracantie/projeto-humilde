<?php

//RECEBE DO LOGIN
    $email = $_POST["email_login"];
    $senha = $_POST["senha_login"];
    //conecta com a base de dados:
    include "includes/conecta.php";
    
    //ver se o email existe no banco e se senha bate
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $res = mysqli_query($con, $sql);
    
    //ver se encontrou registro que bate na tabela
    $qtdRegistros = mysqli_num_rows($res);
    
    if ($qtdRegistros > 0){
        
        session_start();
        
        $row = mysqli_fetch_assoc($res);
        
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];
        
        header("Location: emprestimos.php");
        
    }else{
        header("Location: index.php?erro=1");
        
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
    
    //tabela itens: id, nome item, descri????o item, cidade e estado onde esta, dono, email do dono, por qts semanas empresta
    
    // Inicia sess??es
session_start();

// Recupera o login
$email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

// Usu??rio n??o forneceu a senha ou o login
if(!$email || !$senha)
{
	echo "Voc?? deve digitar seu login e senha!";
	exit;
}

/**
* Executa a consulta no banco de dados.
* Caso o n??mero de linhas retornadas seja 1 o login ?? v??lido,
* caso 0, inv??lido.

$SQL = "SELECT id, nome, email, senha
FROM usuarios
WHERE email = "" . $email . """;
$result_id = @mysql_query($SQL) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_id);

// Caso o usu??rio tenha digitado um login v??lido o n??mero de linhas ser?? 1..
if($total)
{
	// Obt??m os dados do usu??rio, para poder verificar a senha e passar os demais dados para a sess??o
	$dados = @mysql_fetch_array($result_id);

	// Agora verifica a senha
	if(!strcmp($senha, $dados["senha"]))
	{
		// TUDO OK! Agora, passa os dados para a sess??o e redireciona o usu??rio
		$_SESSION["id_usuario"]= $dados["id"];
		$_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
		$_SESSION["permissao"]= $dados["postar"];
		header("Location: emprestimos.php");
		exit;
	}
	// Senha inv??lida
	else
	{
	 "Senha inv??lida!";
	exit;
	}
}
	// Login inv??lido
else
{
	echo "O email fornecido n??o est?? cadastrado!";
    
    
    
    
    // Inicia sess??es
session_start();

// Verifica se existe os dados da sess??o de login
if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"]))
{
// Usu??rio n??o logado! Redireciona para a p??gina de login
header("Location: index.html");
exit;
}
*/

?>