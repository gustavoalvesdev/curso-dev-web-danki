<?php
	include('../config.php');
	$data = array();
	$assunto = 'Novo mensagem do site!';
	$corpo = '';
	$data['sucesso'] = true;



	//$data['retorno'] = 'sucesso';

	die(json_encode($data));
?>