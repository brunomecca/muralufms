<?php
	if(isset($_POST['acao']) && $_POST['acao'] == 'cadastrarMensagem'){
		$titulo = ucfirst($_POST['titulo']);
		$mensagem = ucfirst($_POST['mensagem']);
		$id_usuario = $_SESSION['id'];
		$opiniao = ($_POST['opiniao']);

		$inseresql = mysqli_query($link, "INSERT INTO mensagens (id_usuario, titulo, mensagem, opiniao) VALUES ('$id_usuario', '$titulo', '$mensagem', '$opiniao')");
		echo '<div class="alert alert-success" role="alert">Enviado com sucesso!</div>';
		
	}
?>