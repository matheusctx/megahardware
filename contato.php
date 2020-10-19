<?php 
require_once('cabecalho.php'); 
?>	 

<?php if(array_key_exists('salvo',$_GET) && $_GET['salvo']==1){ ?>
		
<script>

$(document).ready(function() {
    $('#modelo').modal('show');
})
</script>		
	
		
<!-- Modal -->
<div class="modal fade" id="modelo" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Mensagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-success">
      Dados armazenados com sucesso.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
		
<?php } else if((array_key_exists('salvo',$_GET) && $_GET['salvo']==0)) {?>
	
<script>

$(document).ready(function() {
    $('#modelo').modal('show');
})
</script>		
	
		
<!-- Modal -->
<div class="modal fade" id="modelo" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Mensagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-danger">
      Erro ao armazenar dados.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
	
<?php }?>
 <!-- Page Content -->
 <div class="container"><br>
	<div class="card border-Light">
	  <div class="card-header text-white bg-info ">Contato</div>
	  <div class="card-body">
	  <form id="computador-form" action="contato-email.php" method="post">
			<div class="row">
				<div class="col">
						<label for="Nome"><h6>Nome</h6></label>
						<input type="text" name="campo_nome" id="modelo" class="form-control">
						</br>
				</div>	
			</div>	
			<div class="row">
				<div class="col">
					
						<label for="Fabricante"><h6>E-mail</h6></label>
						<input type="email" name="campo_email" class="form-control">
						</br>
					
				</div>
			</div>
			<div class="row">
				<div class="col">
					
						<label for="Assunto"><h6>Assunto</h6></label>
						<input type="text" name="campo_assunto" class="form-control">
						</br>
					
				</div>
			</div>
			<div class="row">
				<div class="col">
					
						<label for="Assunto"><h6>Mensagem</h6></label>
						<textarea class="form-control" name="campo_textarea" id="textarea" rows="4"></textarea>
						</br>
					
				</div>
			</div>
			
			
			<div class="form-group">	
               
				</br>
				
				<input type="submit" class="btn btn-info" value="Enviar">
			</div>
		</form>	
	  </div>
	</div>
</div>
</br>

 <!-- Footer -->
  <footer class="py-5 fixed-bottom" style="background-color: #4361ee;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Mega Hardware 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  
  
  

</body>

</html>