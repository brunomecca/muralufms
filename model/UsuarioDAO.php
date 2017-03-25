<?php
	include "connect.php";
	class UsuarioDAO{
		function adicionarNoBanco($usuario){
			$nome = $usuario.getNome();
			$email = $email.getEmail();
			$senha = $usuario.getSenha();
			$username = $usuario.getUsername();

			$inseresql = mysqli_query($link, "INSERT INTO usuarios (id, nome, email, senha, usuario) VALUES ('$id_usuario', '$titulo', '$mensagem', '$opiniao','$positivo','$negativo')");

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