<?php
	include "connect.php";
	class MensagemDAO{
		function adicionarNoBanco($mensagem){
			$titulo = $mensagem.getTitulo();
			$mensagem = $mensagem.getMensagem();
			$id_usuario = $mensagem.getIdUsuario();
			$opiniao = $mensagem.getOpiniao();
			$positivo = 0;
			$negativo = 0;

			$inseresql = mysqli_query($link, "INSERT INTO mensagens (id_usuario, titulo, mensagem, opiniao, positivo, negativo) VALUES ('$id_usuario', '$titulo', '$mensagem', '$opiniao','$positivo','$negativo')");
			if($inseresql == True)
				return True;
			else
				return False;
		}

		function puxarDoBanco(){
			$consulta = mysqli_query($link, "SELECT * FROM mensagens ORDER BY id DESC");
			return $consulta;
		}
	}
?>