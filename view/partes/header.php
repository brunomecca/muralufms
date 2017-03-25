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