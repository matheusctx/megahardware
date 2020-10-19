<?php 
require_once('cabecalho.php'); 
require_once ('classes/Produto.php');

$computador = new Produto();
$modelo = $_POST['campo_modelo'];
$listaPesquisa = $computador->pesquisa($modelo);
$quantidade = $computador->quantidade($modelo); 


?>	 

 <?php if(!empty($listaPesquisa) && isset($listaPesquisa) && !empty($modelo) && isset($modelo)){?>
 
 <div class="container"><br>
	<div class="card border-Light">
	  <div class="card-header text-white bg-info ">Compra Produto</div>
	  <div class="card-body">
	  <form id="computador-form" action="compra-produto.php" method="post">
			<div class="row">
				<div class="col">
					<label for="Modelo" ><h6>Modelo</h6></label>
					<input type="text" name="campo_modelo" id="modelo" class="form-control">
				</div>	
			
			</div>	
			<br>
			<div class="row">
				<div class="col">
				<input type="submit" class="btn btn-info " value="Pesquisar">
				</div>	
			</div>	
			<br>
			 <?php foreach ($listaPesquisa as $linha): ?>
				<div class="form-group">
					<label for="Sistema"><h6>Descrição Produto</h6></label>
					<div class="row">	
					<div class="col">
							<label for="Fabricante" ><h6>Fabricante</h6></label>
							<input type="text" name="campo_sistema" value="<?php echo $linha['fabricante'];?>" class="form-control" disabled>
							<br>
						</div>
						<div class="col">
							<label for="Modelo" ><h6>Modelo</h6></label>
							<input type="text" name="campo_sistema" value="<?php echo $linha['modelo']; ?>" class="form-control" disabled>
							<br>
						</div>
					</div>
					<?php endforeach ?>	
					<label for="Valor"><h6>Quantidade no Estoque</h6></label>
					<input type="text" name="campo_valor" value="<?=$quantidade['0']?>" class="form-control" disabled>
					<br>
					<input type="submit" class="btn btn-info" value="Comprar">
				</div>
			
		</form>	
	  </div>
	</div>
</div>
<br>

<?php }else{?>

<script>

$(document).ready(function() {
    $('#modelo').modal('show');
	$('button').click(function(){
		$(location).attr('href','compra-produto.php');
	});
	
	
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
      Computador não encontrado.
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-info" id="#btnmodal" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<br>
<?php } ?>

<?php 
require_once('cabecalho.php'); 
?>
 