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
	  <div class="card-header text-white bg-info ">Cadastrar Impressora</div>
	  <div class="card-body">
	  <form id="form_produto" action="impressora-inserir.php" method="post">
			<div class="row">
				<div class="col">
					<label for="Modelo"><h6>Modelo</h6></label>
					<input type="text" name="campo_modelo" id="modelo" class="form-control">
					</br>
				</div>	
				<div class="col">	
					<label for="Fabricante"><h6>Fabricante</h6></label>
					<input type="text" name="campo_fabricante" class="form-control">
					</br>
				</div>
			</div>	
			<div class="row">
				<div class="col">
					<label for="Memoria"><h6>Processo de Impressão</h6></label>
					<input type="text" name="campo_impressao" class="form-control">
				</br>
				</div>	
				<div class="col">	
					<label for="Processador"><h6>Tipo</h6></label>
					<input type="text" name="campo_tipo" class="form-control">
				</br>
				</div>
			</div>	
			<div class="row">
				<div class="col">
					<label for="Armazenamento"><h6>Cor de Impressão</h6></label>
					<input type="text" name="campo_cor"  class="form-control">
				</br>
				</div>	
			</div>	
			<div class="form-group">	
				<label for="Valor"><h6>Valor</h6></label>
                <input type="number" name="campo_valor" step="any" class="form-control">
				</br>
				
				<input type="submit" class="btn btn-info" value="Salvar">
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