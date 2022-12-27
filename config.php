<?php

session_start();

$autoload = function($class) {
	if ($class == 'Email') {
		require_once('classes/phpmailer/PHPMailerAutoLoad.php');
	}
	include('classes/' . $class . '.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://localhost/Projeto_01/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');
// Conectar com banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'projeto_01');

//Funções
function pegaCargo($cargo) {
	$arr = [
		'0' => 'Normal',
		'1' =>  'Sub Administrador',
		'2' => 'Administrador'
	];

	return $arr[$cargo];
}

$nomeEmpresa = 'Danki Code';
