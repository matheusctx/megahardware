<?php

require_once('cabecalho.php'); 
require_once 'classes/Produto.php';
require_once 'classes/Impressora.php';


?>

<?php

$impressora = new Impressora();
$lista = $impressora->listar();


?>




<br>
<form class="form-inline" method="post" action="impressora-pesquisar.php">
  <div class="form-group">
    <label for="p">Modelo Impressora:</label>
    <input type="texto" name="pesquisa" class="form-control">
	<input type="submit" class="btn btn-info" value="Pesquisar">
  </div>
</form>

  
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
                <?php foreach ($lista as $linha): 
				
					
					
							
					
				?>
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
                <?php 
				
					
				endforeach

				?>
            </tbody>
        </table>
    </div>
</div>
<!-- Footer -->
  <footer class="py-5 fixed-bottom" style="background-color: #4361ee;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Mega Hardware 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  
  
  

</body>

</html>