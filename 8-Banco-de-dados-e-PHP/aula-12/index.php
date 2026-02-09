<?php 

$pdo = new PDO('mysql:host=localhost;dbname=curso_devweb', 'root', '');
$stmt = $pdo->prepare("SELECT nome, SUM(nivel) AS total_niveis FROM teste GROUP BY nome HAVING SUM(nivel) < 32");

$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";   
print_r($usuarios);
echo "</pre>";
