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

			<?php
					include "view/partes/header.php";
			?>

			<div class="container-fluid">

				<?php
					include "controllers/HomeControle.php";
					echo $mensagens;


					
				?>



				

			</div><!-- container fluid-->


			<?php

				include "view/partes/footer.php";

			?>
	</body>
</html>