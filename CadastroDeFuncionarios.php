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
</head>
<body>

<div class="container">
  <center><h2>Cadastro De Funcionários</h2></center>
  
  <form method="POST" action="ProcessaCadastroFuncionarios.php">
  
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" placeholder=" Digite seu nome: " name="name">
	  
	  <label for="cpf">CPF:</label>
	  
      <input type="text" class="form-control" placeholder="Ex.: 000.000.000-00" data-mask="000.000.000-00" name="cpf">
	  
	  <label for="Data_Nasc">Data Nasc:</label>
      <input type="date" class="form-control" placeholder="Ex.: 00/00/0000" name="nasc">
	  
	  <label for="telefone">Telefone:</label>
	  <input type="tel" class="form-control phone-ddd-mask"  placeholder="Ex.: (00) 0000-0000" name="telefone">

	  <label for="email">Email:</label>
	  <input type="email" class="form-control" placeholder="E.: Exemplo@exemplo.com.br" name="email">
	  
	  <label for="endereco">Endereço:</label>
	  <input type="txt" class="form-control" placeholder="Ex.: Endereço n°" name="endereco">
	  
	  <label for="cargo">Cargo:</label>
	  <input type="txt" class="form-control" placeholder="Ex.: Ajudante" name="cargo">
	  
    </div>
	
    <button type="submit" class="btn btn-primary" name="cadastrar">Salvar</button>
  </form>
</div>

</body>
</html>
