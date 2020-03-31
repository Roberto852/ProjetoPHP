<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale-1.0, user-scalable-no" />
	<title>Tela de Login.</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">
		#tamanho {
			width: 350px;
			-webkit-box-shadow: -3px -1px 16px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: -3px -1px 16px 0px rgba(0,0,0,0.75);
			-box-shadow: -3px -1px 16px 0px rgba(0,0,0,0.75);
		}
	</style>



</head>

<body>

<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
	<div style="padding: 10px">
	<center>
	<img src="imagem/cadeado.png" width="125px" height="125px">
	</center>
	<form>
		<div class="form-group">
			<label>Usuário</label>
			<input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>			
		</div>
	</form>
	<div style="text-align: right;">
		<button type="submit" class="btn btn-sm btn-success">Entar</button>
	</div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>