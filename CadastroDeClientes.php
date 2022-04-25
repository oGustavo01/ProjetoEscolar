<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tela de Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="Stylecadastroclientes.css" rel="stylesheet">
</head>
<body>



<div class="container mt-3">
 <!--Inputs e Botão--->
  <form  method="POST" action="ProcessaCadastroClientes.php">
	<div class="quadra">
		<h2>Tela de Cadastro</h2>
		<div class="mb-3 mt-3">
		  <label class="nomes" for="name">Nome: </label>
		  <input type="text" class="form-control" placeholder="Digite seu nome.: " name="name">
		</div>
		
		<div class="mb-3 mt-3">
		  <label class="nomes" for="email">Email: </label>
		  <input type="email" class="form-control" placeholder=" Digite seu e-mail.: " name="email">
		</div>
		
		<div class="mb-3 mt-3">
		  <label class="nome" for="pass">Crie sua senha: </label>
		  <input type="password" class="form-control" placeholder="Digite sua senha.: " name="nasc">
		</div>
		
		<button type="submit" class="btn btn-primary" href="TelaLogin.php" name="cadastrar">
		
			Cadastrar
			
		</button>
	</div>	
  </form>
</div>

</body>
</html>