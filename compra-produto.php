<?php 
require_once('cabecalho.php'); 


?>	 

 <div class="container"><br>
	<div class="card border-Light">
	  <div class="card-header text-white bg-info ">Compra Produto</div>
	  <div class="card-body">
	  <form id="computador-form" action="compra-form.php" method="post">
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
			
				<div class="form-group">	
					<label for="Sistema"><h6>Descrição Produto</h6></label>
					<input type="text" name="campo_sistema"  class="form-control" disabled>
					<br>
					<label for="Valor"><h6>Quantidade no Estoque</h6></label>
					<input type="number" name="campo_valor"  step="any" class="form-control" disabled>
					<br>
					
					<input type="submit" class="btn btn-info" value="Comprar">
				</div>
		</form>	
	  </div>
	</div>
</div>
<br>


 <!-- Footer -->
  <footer class="py-5 fixed-bottom" style="background-color: #4361ee;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Mega Hardware 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  
  
  

</body>

</html>