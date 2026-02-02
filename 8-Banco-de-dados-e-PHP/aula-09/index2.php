<?php 

$pdo = new PDO('mysql:host=localhost;dbname=curso_devweb', 'root', '');

$sql = $pdo->prepare("SELECT * FROM usuarios");

$sql->execute();

$usuarios = $sql->fetchAll();

foreach($usuarios as $usuario) {
    echo "ID: ".$usuario['id']." - Nome: ".$usuario['nome']." - E-mail: ".$usuario['email']."<br>";
}
