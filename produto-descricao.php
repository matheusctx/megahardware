<?php 
require_once('cabecalho.php'); 
require_once 'classes/Produto.php';
$computador = new Produto();
$listacomputador = $computador->listar();
?>	 


<br>
 <!-- /.row -->
<div class="container">	

    <div class="container">
	
		<?php
		
			$computador->id = $_GET['id'];
		
			foreach ($listacomputador as $linha){
				
					if($computador->id==$linha['id']){
						$computador->modelo = $linha['modelo'];
						$computador->fabricante = $linha['fabricante'];
						$computador->valor = $linha['valor'];
						$computador->memoria = $linha['memoria'];
						$computador->processador = $linha['processador'];
						$computador->armazenamento = $linha['armazenamento'];
						$computador->sistema = $linha['sistema'];
						$computador->tela = $linha['tela'];
					}	
			}								
		?>			
	
	
     
        <div class="card border-Light ">
			<div class="card-header text-white bg-info "><h4>Descrição</h4></div>
          <img src="imagens/<?=$computador->id?>.jpg" class="rounded mx-auto d-block" width="300" height="200" alt="Notebook" >
				 <div class="card-body">
					<div class="row">
						<div class="col">
							<h4 class="card-title" style="color: #0077b6;">Especificações do Produto</h4>
						
						</div>	
						<div class="col text-right">
							<h4 class="card-title" style="color: #0077b6;"> Valor: R$<?php echo $computador->valor?></h4>
						</div>	
					</div>		
					<div class="row border-top border-bottom border-info">
						<div class="col">
							<label for="Modelo"><h4>Modelo: <?php echo $computador->modelo?></h4></label>
							</br>
						</div>	
						
					</div>	
					<div class="row border-bottom border-info">
						<div class="col">
							<label for="Fabricante"><h4>Fabricante: <?php echo $computador->fabricante?> </h4></label>
							</br>
						</div>	
					</div>	
					<div class="row border-bottom border-info">
						<div class="col">
							<label for="Fabricante"><h4>Armazenamento: <?php echo $computador->armazenamento?> </h4></label>
							</br>
						</div>	
					</div>	
					<div class="row border-bottom border-info">
						<div class="col">
							<label for="Fabricante"><h4>memoria: <?php echo $computador->memoria?> </h4></label>
							</br>
						</div>	
					</div>	
					<div class="row border-bottom border-info">
						<div class="col">
							<label for="Fabricante"><h4>Sistema: <?php echo $computador->sistema?> </h4></label>
							</br>
						</div>	
					</div>	
					<div class="row border-bottom border-info">
						<div class="col">
							<label for="Fabricante"><h4>Tela: <?php echo $computador->tela?> </h4></label>
							</br>
						</div>	
					</div>	
				   
				</div>
			</div>
    </div>
    <!-- /.row -->

</div>
  <!-- /.container -->
<!-- Footer -->
  <footer class="py-5 fixed-bottom" style="background-color: #4361ee;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Mega Hardware 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  
  
  

</body>

</html>