<?php


include 'conexao.php';
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alteração do Cadastro.</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">
		#tamanhoContainer {
			width: 500px
		}
		
	</style>

</head>
<body>  

<div class="container"  id="tamanhoContainer"  style="margin-top: 40px">
	<h4>Formulário de Alteração </h4>
		<form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
			<?php

			$sql = "SELECT * FROM `estoque` WHERE  id_estoque = $id";
			$buscar = mysqli_query($conexao, $sql);
			while ($array = mysqli_fetch_array($buscar)) {

				$id_estoque = $array['id_estoque'];
    			$nroproduto = $array['nroproduto'];
    			$nomeproduto = $array['nomeproduto'];
    			$categoria = $array['categoria'];
    			$quantidade = $array['quantidade'];
    			$fornecedor = $array['fornecedor'];

			?>




		<div class="form-group">
			<label>Código Produto</label>
			<input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
			<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
		</div>	

		<div class="form-group">
			<label>Nome Produto </label>
			<input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">  
		</div>
			<div class="form-group">
   		 		<label>Categoria </label>
   		 			<select class="form-control" name="categoria"  >
   		 				<option>Selecione.</option>
     		 			<option>Material Bruto</option>
      					<option>Eletrodoméstico</option>
     					<option>Móveis</option>
     					<option>Eletrinho</option>
      					<option>Telefônia</option>
    				</select>	
    		</div>

 	<div class="form-group">
		<label>Quantidade </label>
		<input type="number" class="form-control" name="quantidade" value="<?php echo$quantidade ?>">        
      
	</div>
		<div class="form-group">
   		 <label>Fornecedor</label>
   		 	<select class="form-control" name="fornecedor" >
     		 	<option>Selecione.</option>
     		 	<option>Fornecedor A</option>
      			<option>Fornecedor B</option>
     			<option>Fornecedor C</option>
      			<option>Fornecedor D</option>
      			
    		</select>	
    	</div>
    	<div style="text-align: right;">
    		<a href="listar_produtos.php" role="button"  class="btn btn-primary btn-sm"> Voltar </a>
    	   	<button type="submit"  class="btn btn-success btn-sm"> Alterar </button>
    	</div>  	
    	<?php } ?>
</form>
</div>



	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
