<!DOCTYPE html>
<html>
    <head>
        <?php
            include_once("../connect.php");
        ?>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <title>Mural UFMS - Cadastro</title>
    </head>
    <body>
        
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
                                $inseresql = mysqli_query($link, "INSERT INTO usuarios (nome, email, senha, usuario) VALUES ('$nome', '$email', '$senha', '$usuario')");
                            }
                            
                        }
                    ?>
                    <h1>Mural UFMS - Cadastro</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="Coloque seu nome!">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glypicon glyphicon-envelope"></i></span>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Coloque seu e-mail!">
                        </div>
                        <p></p>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Coloque o seu nome de usuario ! " required="true" />
                        </div>
                        <p></p>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Coloque a sua senha ! " required="true" />
                        </div>
                        <p></p>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Coloque a sua senha ! " required="true" />
                        </div>
                        <input type="hidden" name="acao" value="cadastrar" />
                        <input type="submit" value="Cadastrar" class="btn" />
                    </div>
                    </form>
                </div>
            </div>
         </div>
        <script type="text/javascript" src="../js/cadastro.js"></script>   
    </body>
</html>

