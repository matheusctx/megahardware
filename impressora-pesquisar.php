<?php

require_once('cabecalho.php'); 
require_once ('classes/Impressora.php');


?>


<?php



$impressora = new Impressora();
$modelo = $_POST['pesquisa'];
$listaPesquisa = $impressora->pesquisa($modelo);



?>

<?php if(!empty($listaPesquisa) && isset($listaPesquisa)&& !empty($modelo) && isset($modelo)){?>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-sm" id="tabela">
		
            <thead>
                <tr>
					<br>
                    <th>Modelo</th>
					<th>Fabricante</th>
                    <th>Valor</th>
					<th>Cor</th>
                    <th>Tipo</th>
					<th>Processo de Impressão</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaPesquisa as $linha): ?>
                    <tr>
                        <td><?php echo $linha['modelo'] ?></td>
						<td><?php echo $linha['fabricante'] ?></td>
                        <td><?php echo $linha['valor'] ?></td>
						<td><?php echo $linha['cor'] ?></td>
						<td><?php echo $linha['tipo'] ?></td>
                        <td><?php echo $linha['processo_impressao'] ?></td>
                        <td><a href="impressora-editar.php?id=<?php echo $linha['id'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="impressora-excluir.php?id=<?php echo $linha['id'] ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

	
	
<?php }else{?>

<script>

$(document).ready(function() {
    $('#modelo').modal('show');
	$('button').click(function(){
		$(location).attr('href','lista-impressora.php');
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
      impressora não encontrado.
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-info" id="#btnmodal" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
	
	
	
<?php } ?>


<!-- Footer -->
  <footer class="py-5 fixed-bottom" style="background-color: #4361ee;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Mega Hardware 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  