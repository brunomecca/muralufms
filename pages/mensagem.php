<?php
	if(!isset($_SESSION['nome']) || !isset($_SESSION['senha'])){
		echo '<script>alert("Você não está autorizado!");</script>';
		header("Location:index.php");
	}
?>
<div class="text-center container">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h3 class="panel-title text-left">Olá, <?php echo $_SESSION['nome'];?></h3>
		    </div>
		    <div class="text-left panel-body">
			    Coloque sua mensagem no mural!
			    <form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
					    <input type="text" class="form-control" name="titulo" required="truess" placeholder="Título" aria-describedby="basic-addon1">
					    </br>
						<textarea class="form-control" rows="5" required="true" name="mensagem" placeholder="Mensagem"></textarea>
					</div>

					Tipo de mensagem:<br>
					<input type="radio" name="opiniao" value="positivo" checked><span class="label label-success">Positiva</span><br>
  					<input type="radio" name="opiniao" value="negativo"> <span class="label label-danger">Negativa</span><br><br>
                    <input type="hidden" name="acao" value="cadastrar" />
                    <input type="submit" class="btn btn-primary btn-sm" value="Enviar" class="btn" />
			    </form>
		    </div>
		</div>
<?php
	if(isset($_POST['acao']) && $_POST['acao'] == 'cadastrar'){
		$titulo = ucfirst($_POST['titulo']);
		$mensagem = ucfirst($_POST['mensagem']);
		$id_usuario = $_SESSION['id'];
		$opiniao = ($_POST['opiniao']);

		$inseresql = mysqli_query($link, "INSERT INTO mensagens (id_usuario, titulo, mensagem, opiniao) VALUES ('$id_usuario', '$titulo', '$mensagem', '$opiniao')");
		echo '<div class="alert alert-success" role="alert">Enviado com sucesso!</div>';
		
	}
?>
</div>