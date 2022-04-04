<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tela de Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>



<div class="container mt-3">
  <h2>Tela de Cadastro</h2>
  <p> Por favor, Preencha o Formulário corretamente</p>
  <form  method="POST" action="ProcessaCadastroClientes.php">
	<div class="mb-3 mt-3">
	  <label for="name">Nome: </label>
      <input type="text" class="form-control" placeholder="Digite seu nome.: " name="name">
    </div>
    
	<div class="mb-3 mt-3">
      <label for="email">Email: </label>
      <input type="email" class="form-control" placeholder=" Digite seu e-mail.: " name="email">
    </div>
    
	<div class="mb-3 mt-3">
      <label for="pass">Crie sua senha: </label>
      <input type="password" class="form-control" placeholder="Digite sua senha.: " name="nasc">
    </div>
    
	<button type="submit" class="btn btn-primary" name="cadastrar">
	
		Increver-se
		
	</button>
  </form>
</div>

</body>
</html>