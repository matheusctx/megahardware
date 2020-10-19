<?php 
require_once('cabecalho.php'); 
require_once 'classes/Produto.php';
$computador = new Produto();
$listacomputador = $computador->listar();

?>	

   <!-- Header -->
  <header class="py-5 mb-5" style="background-color: #0077b6;">
    <div class="container h-100">
	
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="h1 text-white mt-5 mb-2">Mega Hardware</h1>
          <p class="h2 text-white">A melhor loja do norte no ramo de informática.</p>
        </div>
      </div>
    </div>
  </header>
  
    <!-- /.row -->
<div class="container">	

    <div class="row">
	
		<?php
			
			foreach ($listacomputador as $linha){
				
					
					$computador->id=$linha['id'];
					$computador->modelo = $linha['modelo'];
					$computador->fabricante = $linha['fabricante'];
					$computador->valor = $linha['valor'];
					$computador->memoria = $linha['memoria'];
					$computador->processador = $linha['processador'];
					$computador->armazenamento = $linha['armazenamento'];
					$computador->sistema = $linha['sistema'];
					$computador->tela = $linha['tela'];
					//Dell Inspiron 3583 Core I5 8gb 256gb Ssd Windows
					
											
		?>			
			
			
				<div class="col-md-4 mb-5">
					<div class="card h-100">
					  <img class="card-img-top" src="imagens/<?=$computador->id?>.jpg" alt="Notebook" >
					  <div class="card-body">
						<h4 class="card-title">Notebook</h4>
						<p class="card-text">Notebook <?php echo $computador->fabricante?> Inspiron 
							<?php echo $computador->modelo?> com processador <?php echo $computador->processador?> 
							e memória <?php echo $computador->memoria?> com armazenamento <?php echo $computador->armazenamento?> 
							<?php echo $computador->sistema?> com tela de <?php echo $computador->tela?> polegada.
						</p>
					  </div>
					  <div class="card-footer">
						<a href="produto-descricao.php?id=<?=$computador->id?>" class="btn btn-primary">Descrição do Produto</a>
					  </div>
					</div>
				</div>
					
			
				
			
		<?php
			
			if($computador->id==6){
				break;
			}
		}//fim foreach		
		?>	
		
				
				
				
		
	
		
		
     
    </div>
	
	
    <!-- /.row -->

  </div>
  <!-- /.container -->

  
<?php 
	require_once('rodape.php');
?>	


