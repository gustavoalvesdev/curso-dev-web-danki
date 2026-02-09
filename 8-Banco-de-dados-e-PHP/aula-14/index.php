<?php 

$pdo = new PDO('mysql:host=localhost;dbname=curso_devweb', 'root', '');

$sql = "DESCRIBE teste";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$teste = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($teste as $campo) {
    echo "CAMPO: " . $campo['Field'] . "<br>";
}
