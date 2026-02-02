<?php 

$pdo = new PDO('mysql:host=localhost;dbname=curso_devweb', 'root', '');

$sql = $pdo->exec("LOCK TABLES usuarios WRITE");

sleep(10);

