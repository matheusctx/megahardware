<?php

require_once('cabecalho.php'); 
require_once 'classes/Produto.php';
require_once 'classes/Impressora.php';


?>

<?php

$computador = new Produto();
$lista = $computador->listar();


?>




<br>
<form class="form-inline" method="post" action="computador-pesquisar.php">
  <div class="form-group">
    <label for="p"><h4>Modelo do computador:</h4></label>
    <input type="texto" name="pesquisa" class="form-control" >
	<input type="submit" class="btn btn-info" value="Pesquisar" >
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
					<th>Memória</th>
                    <th>processador</th>
					<th>Sistema</th>
                    <th>Tela</th>
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
						<td><?php echo $linha['memoria'] ?></td>
						<td><?php echo $linha['processador'] ?></td>
                        <td><?php echo $linha['sistema'] ?></td>
						<td><?php echo $linha['tela'] ?></td>
                        <td><a href="computador-editar.php?id=<?php echo $linha['id'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="computador-excluir.php?id=<?php echo $linha['id'] ?>" class="btn btn-danger">Excluir</a></td>
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