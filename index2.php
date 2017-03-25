
<?php
  include ("connect.php");
  require_once("model/MensagemDAO.php");
  require_once("model/UsuarioDAO.php");
  //começo da página
  include "view/partes/header.php";

  if(!isset($_GET['page']) || $_GET['page'] == ''){
    include('controllers/HomeControle2.php');
  }

  //final da página
  include "view/partes/footer.php";
?>