<?php 

define('HOST', 'localhost');
define('DB', 'projeto_01');
define('USER', 'root');
define('PASS', '');

require 'MySql.php';


if (MySql::connect() != null) {
    echo 'Conectou';
}
