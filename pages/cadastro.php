<!DOCTYPE html>
<html>
    <head>
        <?php
            include_once("../connect.php");
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        ?>
        <link rel="icon" type="image/png" href="../img/mural-ufms.png">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
       

        <title>Mural UFMS - Cadastro</title>
    </head>
    <body class="cadastro-page">
        
         <div id="form-cadastro" class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <?php
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

                    <div id="panel-cadastro" class="panel panel-default">
                        <img id="imagem-cadastro" src="../img/mural-ufms.png"/>
                    
                        <h2>Cadastre-se e tenha acesso a recursos exclusivos ! </h2>
                        <form name="form-cadastro form-horizontal" onsubmit="return validarCadastro()" action="" method="post" enctype="multipart/form-data" class="form-signin">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Coloque seu nome!">
                                    <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glypicon glyphicon-envelope"></i></span>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Coloque seu e-mail!">
                                    <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Coloque o seu nome de usuario ! " required="true" />
                                <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Coloque a sua senha ! " required="true" />
                                <span></span>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Coloque a sua senha ! " required="true" />
                                <span></span>
                            </div>
                            <p></p>
                            <input type="hidden" name="acao" value="cadastrar" />
                            <input type="submit" value="Cadastrar" class="btn btn-lg btn-primary" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
        <script type="text/javascript" src="../js/cadastro.js"></script>   
    </body>
</html>

