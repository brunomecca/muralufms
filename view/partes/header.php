<!DOCTYPE html>
<html>
<head>
  <title>Mural UFMS</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="icon" type="image/png" href="img/mural-ufms.png">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<header>
<!-- navbar-->
<nav class="navbar navbar-inverse navbar-default">
  <div class="container">

    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
        MURAL UFMS
      </a><!-- navbar-brand-->
    </div><!-- container-->

    <ul class="nav navbar-nav navbar-right">
    	<?php include "controllers/UsuarioControle.php";
    		echo $botaoLadoEsquerdo;
    	?>
	</ul><!-- list -->
  </div><!-- container-->
</nav><!-- navbar -->
</header>