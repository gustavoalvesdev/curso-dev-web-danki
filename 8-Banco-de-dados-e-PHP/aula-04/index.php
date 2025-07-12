<?php 

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

$id = 3;

$sql = "DELETE FROM clientes WHERE id = :id";
$sql = $pdo->prepare($sql);
$sql->bindValue(':id', $id);
$sql->execute();
