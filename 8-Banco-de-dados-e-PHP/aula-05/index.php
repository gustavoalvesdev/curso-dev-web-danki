<?php 

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');

$sql = $pdo->prepare("SELECT p.titulo, c.nome, p.conteudo FROM posts AS p INNER JOIN categorias AS c ON p.categoria_id = c.id");

$sql->execute();

$info = $sql->fetchAll();

foreach($info as $key => $value) {

    echo "Título: " . $value['titulo'];
    echo "<br>";
    echo "Categoria: " . $value['nome'];
    echo "<br>";
    echo "Notícia: " . $value['conteudo'];
    echo "<hr>";

}
