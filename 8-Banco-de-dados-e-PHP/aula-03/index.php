<?php 

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

$id = 5;
$nome = 'Isoleida';
$sobrenome = 'Soeiros';

$sql = "UPDATE clientes SET nome = :nome, sobrenome = :sobrenome WHERE id = :id";
$sql = $pdo->prepare($sql);
$sql->bindValue(':nome', $nome);
$sql->bindValue(':sobrenome', $sobrenome);
$sql->bindValue(':id', $id);

$sql->execute();
