<!DOCTYPE html>
<html lang="br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="Stylelogin.css" rel="stylesheet">
</head>
<body>



<div class="container mt-3">

  <form  method= "POST"  action= "ProcessaCadastroLogin.php">
    <div class="quadra">
		  <h2>Faça o Login!!</h2>
		  <!--Inputs e Botão-->
		<div class="mb-3 mt-3">
		  <label class="nomes">Nome:</label>
		  <input type="text" class="form-control" id="nome" placeholder="Digite seu nome.:" name="name">
		</div>
		
		<div class="mb-3">
		  <label class="nomes">E-mail:</label>
		  <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail.:" name="email">
		</div>
		<br>
		<button type="submit" class="btn-primary" name="cadastrar" >

			Fazer Login
			
		</button>
		<!--link-->
	<a class="link" href="/ProjetoEscola/CadastroDeClientes.php">Não se Cadastrou??</a>	
	</div>
	
  </form>
</div>
</body>
</html>