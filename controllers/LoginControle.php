<?php
	if(isset($_POST['acao']) && $_POST['acao'] == 'login'){
		$email = $_POST['email'];
		$senha = $_POST['password'];

		$selecionaUser = mysqli_query($link,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
		$conta = @mysqlI_num_rows($selecionaUser);

		if($conta < 0){
			echo "<div class='alert alert-danger' role='alert'>Usuário inválido!</div>";
		}
		else{
			while($lnUser = mysqli_fetch_array($selecionaUser)){
				$_SESSION['nome'] = $lnUser['nome'];
				$_SESSION['senha'] = $lnUser['senha'];
				$_SESSION['id'] = $lnUser['id'];
				$_SESSION['email'] = $lnUser['email'];
				$_SESSION['usuario'] = $lnUser['usuario'];
			}
			header("Location:index.php");
		}
	}
?>