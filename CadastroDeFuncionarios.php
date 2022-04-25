<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro De Funcionários</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="Stylecadastrofuncionarios.css" rel="stylesheet">
</head>
<body>

<div class="container">
  
  
  <form method="POST" action="ProcessaCadastroFuncionarios.php">
  
		<div class="quadra">
			<!--Inputs e Botão-->
			<h2>Cadastro de funcionários</h2>
			
			<div class="form-group">
			  <label class="nomes" for="nome">Nome:</label>
			  <input type="text" class="form-control" placeholder=" Digite seu nome: " name="name">
			  
			  <label class="nomecpf" for="cpf">CPF:</label>
			  <input type="text" class="form-control" placeholder="Ex.: 000.000.000-00" data-mask="000.000.000-00" name="cpf">
			  
			  <label class="nome" for="Data_Nasc">Data Nasc:</label>
			  <input type="date" class="form-control" placeholder="Ex.: 00/00/0000" name="nasc">
			  
			  <label class="nome" for="telefone">Telefone:</label>
			  <input type="tel" class="form-control"  placeholder="Ex.: (00) 0000-0000" name="telefone">

			  <label class="nomes" for="email">Email:</label>
			  <input type="email" class="form-control" placeholder="E.: Exemplo@exemplo.com.br" name="email">
			  
			  <label class="nome" for="endereco">Endereço:</label>
			  <input type="txt" class="form-control" placeholder="Ex.: Endereço n°" name="endereco">
			  
			  <label class="nomes" for="cargo">Cargo:</label>
			  <input type="txt" class="form-control" placeholder="Ex.: Ajudante" name="cargo">
			
					
			
			</div>
			
			<button type="submit" class="btn btn-primary" name="cadastrar">Salvar</button>

		</div>
    
  </form>
</div>

</body>
</html>
