<?php
	//botão login ou mensagem de bem vindo
	$botaoLadoEsquerdo = '';
	if(!isset($_SESSION['nome']) || !isset($_SESSION['senha'])){
		$botaoLadoEsquerdo =  "<li><a href='index.php?pg=login'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
	}
	else{
		$botaoLadoEsquerdo =  "<li><a href='#'>Bem vindo, ". $_SESSION['nome'] . "</a></li>
		<li><a href='index.php?pg=mensagem'><span class='glyphicon glyphicon-envelope'></span> Enviar Mensagem</a></li>
		<li><a href='index.php?pg=sair'>Sair</a></li>";
	}

	//cadastro de novos usuários
	if(isset($_POST['acao']) && $_POST['acao'] == 'cadastrar'){
        $usuario = $_POST['username'];
        $nome = ucfirst($_POST['nome']);
        $email = $_POST['email'];
        $senha = $_POST['password'];
       	$senha2 = $_POST['confirm-password'];

        if($senha != $senha2){
            echo "<div class='alert alert-danger' role='alert'>As senhas não são iguais!</div>";
        }
        else{
            try{
                $inseresql = mysqli_query($link, "INSERT INTO usuarios (nome, email, senha, usuario) VALUES ('$nome', '$email', '$senha', '$usuario')");
                header("Location:../index.php");
            }
            catch(Exception $e){
                "<div class='alert alert-danger' role='alert'>O email já está cadastrado!</div>";
            }
            
        }
        
    }
?>