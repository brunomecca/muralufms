<!DOCTYPE html>
<html>
<head>
	<?php
		include_once "connect.php";
		session_start();
	?>
	<title>Mural UFMS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
	<div class="container-fluid">
	<nav class="navbar navbar-default">
		  <div class="container">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="index.php">
		        <h4>Mural UFMS</h4>
		      </a>
		    </div>
		    <p class="navbar-text navbar-right">
		    	<?php
		    		if(!isset($_SESSION['nome']) || !isset($_SESSION['senha'])){
						echo "<a href='index.php?pg=login'>Tela de Login</a></p>";
					}
					else{
						echo "Bem vindo, ". $_SESSION['nome'] . "<br>";
						echo "<a href='index.php?pg=mensagem'>Enviar Mensagem</a><br>";
						echo "<a href='index.php?pg=sair'>Sair</a><br></p>";
					}
		    	?>
		  </div>
		</nav>

		<?php
		if(isset($_GET['pg']) && $_GET['pg'] == 'login'){
			include('pages/login.php');
		}elseif(isset($_GET['pg']) && $_GET['pg'] == 'mensagem'){
			include('pages/mensagem.php');
		}
		else{
			$seleciona = mysqli_query($link,"SELECT * FROM mensagens");
			$conta = @mysqli_num_rows($seleciona);
			if($conta != 0){
				while($lnMsg = mysqli_fetch_array($seleciona)){
					echo "<div class='col-md-3'>";
				    if($lnMsg['opiniao'] == 'positivo'){
				     	echo '<div class="panel panel-default panel-success">';
				        echo '<div class="panel-heading">'. $lnMsg['titulo'] .'</div>';
					}
					else{
						echo '<div class="panel panel-default panel-danger">';
						echo '<div class="panel-heading">'. $lnMsg['titulo'] . '</div>';
					}
					echo '<div class="panel-body">' . $lnMsg['mensagem'] . '</div>';
					echo '</div>';
					echo '</div>';
		?>
		<?php
				}
			}
		}
		if(isset($_GET['pg']) && $_GET['pg'] == 'sair'){
			session_destroy();
			header("Location:index.php");
		}
		?>

		</div>
	</div>
</body>
</html>
