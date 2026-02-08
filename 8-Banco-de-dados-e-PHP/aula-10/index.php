<?php 

$pdo = new PDO('mysql:host=localhost;dbname=curso_devweb', 'root', '');
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email LIKE 'gust%'");

$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($usuarios);
