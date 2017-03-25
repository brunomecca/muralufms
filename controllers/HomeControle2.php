<?php


	if(!isset($_GET['page']) || $_GET['page'] == ''){
		$mensagens = MensagemDAO::puxarDoBanco();
		echo $mensagens['id'];
	}
?>