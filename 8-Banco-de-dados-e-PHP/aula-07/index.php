<?php 

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// TRAZ TODOS OS FUNCIONÁRIOS INDEPENDENTE DE HAVER UM CARGO CORRESPONDENTE
$sql = $pdo->prepare("SELECT fu.nome, fu.sobrenome, ca.nome AS cargo FROM funcionarios AS fu LEFT JOIN cargos AS ca ON fu.id_cargo = ca.id");

// TRAZ TODOS OS CARGOS INDEPENDENTE DE HAVER UM FUNCIONÁRIO CORRESPONDENTE
// $sql = $pdo->prepare("SELECT fu.nome, fu.sobrenome, ca.nome AS cargo FROM funcionarios AS fu RIGHT JOIN cargos AS ca ON fu.id_cargo = ca.id");
$sql->execute();

$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
    echo $value['nome'] . ' ' . $value['sobrenome'] . ' - ' . $value['cargo'];
    echo '<hr>';
}
