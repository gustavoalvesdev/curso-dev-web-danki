<?php 

date_default_timezone_set('America/Sao_Paulo');



$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

if (isset($_POST['acao'])) {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momentoRegistro = date('Y-m-d H:i:s');

    $sql = "INSERT INTO clientes (nome, sobrenome, momento_registro) VALUES(:nome, :sobrenome, :momento_registro)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':sobrenome', $sobrenome);
    $sql->bindValue('momento_registro', $momentoRegistro);
    
    $sql->execute();

    echo 'Dados cadastrados com sucesso!';
    exit;
}


?>

<form method="POST">
    <label for="nome">Nome:</label><br>
    <input type="text" name="nome" id="nome"><br><br>
    <label for="sobrenome">Sobrenome:</label><br>
    <input type="text" name="sobrenome" id="sobrenome"><br><br>
    <input type="submit" name="acao" value="Cadastrar">
</form>
