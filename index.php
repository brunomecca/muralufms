<!DOCTYPE html>
<html>
<head>
	<?php
		include_once "connect.php";
		session_start();

	?>
	<?php
		if(isset($_GET['pg']) && $_GET['pg'] == 'Login'){
			include('pages/login.php');
		}
		if(isset($_GET['pg']) && $_GET['pg'] == 'sair'){
			session_destroy();
		}
	?>
	<title>Mural UFMS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>
	<nav class="navbar navbar-default">
		  <div class="container">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">
		        <h4>Mural UFMS</h4>
		      </a>
		    </div>
		    <p class="navbar-text navbar-right">
		    	<?php
		    		if(!isset($_SESSION['nome']) || !isset($_SESSION['senha'])){
						echo "<a href='pages/?pg=login'>Tela de Login</a></p>";
					}
					else{
						echo "Bem vindo, ". $_SESSION['nome'] . "<br>";
						echo "<a href='?pg=sair'>Sair</a><br>";
						echo "Enviar Mensagem</p>";
					}
		    	?>
		  </div>
		</nav>

</body>
</html>
