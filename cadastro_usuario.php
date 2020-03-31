<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Usuário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>


	<div class="container" style="width: 400px; margin-top: 40px">
		<h4>Cadastro de Novo Usuário.</h4>
		<form action="inserir_usuario.php" method="post">
			<div class="form-group">
				<label>Nome do  Usuário</label>
				<input type="text" name="nomeusuario" class="form-control" required autocomplete="on" placeholder="Nome Completo">
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="email" name="mailusuario" class="form-control" required autocomplete="on" placeholder="Digite seu e-mail">
			</div>
			<div class="form-group">
				<label for="txtSenha">Senha do Usuário</label>
				<input  id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="on" placeholder="Digite sua Senha">
			</div>
			<div class="form-group">
				<label for="repetir_senha">Repita Sua Senha</label>
				<input id="repetir_senha" type="password" name="senhausuario2" class="form-control" required autocomplete="on" placeholder="Repita a Senha" oninput="validaSenha(this)">
				<small>Precisa ser igual a senha digitada acima.</small>
			</div>
			<div class="form-group">
				<label>Nivel de Acesso</label>
				<select name="nivelusuario" class="form-control">
					
					<option value="1">Administrador</option>
					<option value="2">Funcionário</option>
					<option value="3">Conferente</option>	

				</select>
			</div>
			<div style="text-align: right;">
    			<a href="menu.php" role="button"  class="btn btn-primary btn-sm"> Voltar </a>

    	   		<button type="submit"  class="btn btn-success btn-sm"> Cadastrar </button>
    	</div>  	
		</form>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

</body>
</html>