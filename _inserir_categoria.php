<?php

include 'conexao.php';
$categoria = $_POST['categoria'];

$sql = "INSERT INTO `categoria` ( `nome_categoria`) values ('$categoria')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <div class="container" style="width: 400px">
 <center>
 	<h3>Adicionado com sucesso.</h3>
	<div style="margin-top: 10px">
 	<a href="adicionar_categoria.php" class="btn btn-sm btn-success" style="color: #fff">Voltar</a>
 	</div>
 </center>	



 </div>