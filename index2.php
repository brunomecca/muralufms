<?php
  require_once("model/MensagemDAO.php");
  require_once("model/UsuarioDAO.php");
  if(!isset($_GET['page']) || $_GET['page'] == ''){
    include('controllers/HomeControle2.php');
  }
?>