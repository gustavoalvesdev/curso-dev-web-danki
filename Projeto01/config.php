<?php

session_start();

date_default_timezone_set('America/Sao_Paulo');

$autoload = function($class) {
	if ($class == 'Email') {
		require_once('classes/phpmailer/PHPMailerAutoLoad.php');
	}
	include('classes/' . $class . '.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://localhost/devweb/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH . 'painel/');
// Conectar com banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'devweb');

//Constantes para o painel de controle
define('NOME_EMPRESA', 'Danki Code');


//Funções
function pegaCargo($cargo) {
	$arr = [
		'0' => 'Normal',
		'1' =>  'Sub Administrador',
		'2' => 'Administrador'
	];

	return $arr[$cargo];
}

