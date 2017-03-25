<?php
	require_once("../model/MensagemDAO.php");
	require_once("../model/UsuarioDAO.php");
	include "connect.php";

	if(!isset($_GET['page']) || $_GET['page'] == ''){
		$mensagens = MensagemDAO::puxarDoBanco($link);	
		
	}
?>
