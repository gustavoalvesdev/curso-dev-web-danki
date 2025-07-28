<?php 

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

// $sql = $pdo->prepare("SELECT * FROM carros GROUP BY ano DESC");
$sql = $pdo->prepare("SELECT * FROM carros ORDER BY nome DESC");

$sql->execute();

$info = $sql->fetchAll();

foreach($info as $key => $value) {

    echo "Carro: " . $value['nome'];
    echo "<br>";
    echo "Ano: " . $value['ano'];
    echo "<hr>";

}
