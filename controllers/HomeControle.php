<?php
	//mensagens e controlador de páginas
	$mensagens = '';
	if(isset($_GET['pg']) && $_GET['pg'] == 'login'){
					include('pages/login.php');
				}elseif(isset($_GET['pg']) && $_GET['pg'] == 'mensagem'){
					include('pages/mensagem.php');
				}
				else{
					$seleciona = mysqli_query($link,"SELECT * FROM mensagens ORDER BY id DESC");
					$conta = @mysqli_num_rows($seleciona);
					if($conta != 0){

						while($lnMsg = mysqli_fetch_array($seleciona)){
							$mensagens = $mensagens . "<div class='col-md-3'>";
						    if($lnMsg['opiniao'] == 'positivo'){
						     	$mensagens = $mensagens . '<div class="panel panel-default panel-success">';
						        $mensagens = $mensagens . '<div class="panel-heading">'. limitar($lnMsg['titulo'],30) .'</div>';
							}
							else{
								$mensagens = $mensagens . '<div class="panel panel-default panel-danger">';
								$mensagens = $mensagens . '<div class="panel-heading">'. limitar($lnMsg['titulo'],30) . '</div>';
							}
							$mensagens = $mensagens . '<div class="limitadorPanel"><div class="panel-body">' . limitar($lnMsg['mensagem'],100);
							if(strlen($lnMsg['mensagem']) > 100){
								$mensagens = $mensagens . '<br><button class="btn btn-default btn-xs" data-target="#conteudoMensagem" data-toggle="modal">Ler mais</button></div></div>';
								$mensagens = $mensagens . '<div class="modal fade" id="conteudoMensagem" role="dialog">
									    <div class="modal-dialog">
									    
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">'.$lnMsg['titulo'].'</h4>
									        </div>
									        <div class="modal-body">
									          <p>'. $lnMsg['mensagem'] .'</p>
									        </div>
									        <div class="modal-footer">
									          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
									        </div>
									      </div>
									      
									    </div>
									  </div>';
							}else
								$mensagens = $mensagens . '</div></div>';

							$mensagens = $mensagens . '</div>';
							$mensagens = $mensagens . '</div>';
								
						}
					}
				}
				if(isset($_GET['pg']) && $_GET['pg'] == 'sair'){
					session_destroy();
					header("Location:index.php?pg=login");
				}
				

?>