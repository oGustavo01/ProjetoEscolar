<? tela inicial precisa de:

tela de?>


<!DOCTYPE html>
<html lang="br">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Salão Cabelo Na Régua</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
		<li class="nav-item">
          <a class="nav-link" href="/ProjetoEscola/TelaLogin.php">Tela de Login</a>
        </li> 		
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Cadastros</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/ProjetoEscola/CadastroDeFuncionarios.php">Cadastro de funcionarios</a></li>
            <li><a class="dropdown-item" href="/ProjetoEscola/CadastroDeClientes.php">Cadastro dos Clientes</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Agendamentos</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/ProjetoEscola/TelaAgendamento.php">Tela de Agendamento</a></li>
            <li><a class="dropdown-item" href="#">Tela de Re-Agendamento</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">

</div>

</body>
</html>
