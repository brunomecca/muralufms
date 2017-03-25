<?php

	include "../view/partes/header.php";
	if(!isset($_GET['page']) || $_GET['page'] == ''){
    	include('./view/home.php');
		$mensagens = MensagemDAO::puxarDoBanco();
		echo $mensagens['id'];
	}
?>