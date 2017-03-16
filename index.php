<!DOCTYPE html>
<html>
<head>
	<?php
		include_once "connect.php";
		include_once("func/funcoes.php");
		session_start();
	?>
	<title>Mural UFMS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="icon" type="image/png" href="img/mural-ufms.png">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
	<script src="js/jquery.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
	<body>

		<!-- navbar-->
		<nav class="navbar navbar-inverse navbar-default">
			  <div class="container">

			    <div class="navbar-header">
			      <a class="navbar-brand" href="index.php">
			        MURAL UFMS
			      </a><!-- navbar-brand-->
			    </div><!-- container-->

			    <ul class="nav navbar-nav navbar-right">
			    	<?php
			    		if(!isset($_SESSION['nome']) || !isset($_SESSION['senha'])){
							echo "<li><a href='index.php?pg=login'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
						}
						else{
							echo "<li><a href='#'>Bem vindo, ". $_SESSION['nome'] . "</a></li>";
							echo "<li><a href='index.php?pg=mensagem'><span class='glyphicon glyphicon-envelope'></span> Enviar Mensagem</a></li>";
							echo "<li><a href='index.php?pg=sair'>Sair</a></li>";
						}
			    	?>
		    	</ul><!-- list -->
			  </div><!-- container-->
			</nav><!-- navbar -->

			<div class="container-fluid">

				<?php
				if(isset($_GET['pg']) && $_GET['pg'] == 'login'){
					include('pages/login.php');
				}elseif(isset($_GET['pg']) && $_GET['pg'] == 'mensagem'){
					include('pages/mensagem.php');
				}
				else{
					$seleciona = mysqli_query($link,"SELECT * FROM mensagens ORDER BY id DESC");
					$conta = @mysqli_num_rows($seleciona);
					if($conta != 0){
						while($lnMsg = mysqli_fetch_array($seleciona)){
							echo "<div class='col-md-3'>";
						    if($lnMsg['opiniao'] == 'positivo'){
						     	echo '<div class="panel panel-default panel-success">';
						        echo '<div class="panel-heading">'. limitar($lnMsg['titulo'],50) .'</div>';
							}
							else{
								echo '<div class="panel panel-default panel-danger">';
								echo '<div class="panel-heading">'. limitar($lnMsg['titulo'],50) . '</div>';
							}
							echo '<div class="limitadorPanel"><div class="panel-body">' . limitar($lnMsg['mensagem'],100);
							if(strlen($lnMsg['mensagem']) > 100){
								echo '<br><button class="btn btn-default btn-xs" data-target="#conteudoMensagem" data-toggle="modal">Ler mais</button></div></div>';
								echo '<div class="modal fade" id="conteudoMensagem" role="dialog">
									    <div class="modal-dialog">
									    
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">'.$lnMsg['titulo'].'</h4>
									        </div>
									        <div class="modal-body">
									          <p>'. $lnMsg['mensagem'] .'</p>
									        </div>
									        <div class="modal-footer">
									          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
									        </div>
									      </div>
									      
									    </div>
									  </div>';
							}else
								echo '</div></div>';

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

			</div><!-- container fluid-->
	</body>
</html>
