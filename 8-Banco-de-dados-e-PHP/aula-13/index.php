<?php 

$pdo = new PDO('mysql:host=localhost;dbname=curso_devweb', 'root', '');

$sql = "SELECT * FROM usuarios AS u WHERE nome IN (SELECT nome FROM teste AS t WHERE u.nome = t.nome)";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";   
print_r($usuarios);
echo "</pre>";
