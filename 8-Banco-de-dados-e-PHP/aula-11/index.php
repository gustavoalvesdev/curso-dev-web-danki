<?php 

$pdo = new PDO('mysql:host=localhost;dbname=curso_devweb', 'root', '');
$stmt = $pdo->prepare("SELECT * FROM teste WHERE nivel BETWEEN 1 AND 49");

$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";   
print_r($usuarios);
echo "</pre>";
