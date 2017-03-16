<?php
	if(isset($_SESSION['nome']) || isset($_SESSION['senha'])){
		header("Location:index.php");
	}
?>
<div id="container">
<div id="form-login" class="container">
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h1>Mural UFMS - Login</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glypicon glyphicon-envelope"></i></span>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Coloque seu email !" required="true" />
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Coloque a sua senha ! " required="true" />
                </div>
                <input type="hidden" name="acao" value="login" />
                <input type="submit" class="btn btn-lg btn-primary" value="Logar" class="btn" />
				<a href="pages/cadastro.php">
                    <button type="button" class="btn btn-lg btn-primary">Cadastrar</button>
                </a>
            </form>
        </div>

    </div>
</div>

<?php
	include "controllers/LoginControle.php";
?>
</div>