<!DOCTYPE html>
<html lang="br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="StyleRelatorio.css" rel="stylesheet">
</head>

<body>

<div class="container mt-3">

<h2 style = "text-align: center"> Relatorios do Salão Cabelo na régua </h2>

<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "salaodebeleza";
$sql = "SELECT * FROM cadastroagendamento";

$conecta = mysqli_connect($localhost, $user, $passw, $banco) or die ("Erro ao conectar");
?>

<h3 style = "text-align: center"> Relatorio de Agendamentos </h3>
<center>
<div class="table-responsive">	
		<table class="table table-dark table-hover">
			<thead>	
			<TR>
			<TD>ID</TD>
			<TD>Nome</TD>
			<TD>Nome do Profissional</TD>
			<TD>Serviço</TD>
			<TD>Hora</TD>
			<TD>Data</TD>
			<TD>Forma de pagamento</TD>
			</TR>
			</thead>
<?php

	$Resultado = mysqli_query($conecta, $sql);

while ($tbl = mysqli_fetch_array($Resultado))
{
	$ID = $tbl['id'];
	$nome = $tbl['Nome'];
	$profi = $tbl['NomeProfissional'];
	$servi = $tbl['Servico'];
	$hora = $tbl['Hora'];
	$data = $tbl['Data'];
	$Pagamen = $tbl['Metodopagamento'];
	
	echo"<TR>";
	echo"<TD>$ID";
	echo"</TD>";

	
	echo"<TD>$nome";
	echo"</TD>";

	
	echo"<TD>$profi";
	echo"</TD>";

	
	echo"<TD>$servi";
	echo"</TD>";

	
	echo"<TD>$hora";
	echo"</TD>";

	
	echo"<TD>$data";
	echo"</TD>";

	
	echo"<TD>$Pagamen";
	echo"</TD>";


	echo"</TR>";
}
?>
</TABLE>

<h3 style = "text-align: center"> Relatorio de Login</h3>

<div class="table-responsive">	
		<table class="table table-dark table-hover">
			<thead>	
				<TR>
				<TD>ID</TD>
				<TD>Nome</TD>
				<TD>E-mail</TD>
				</TR>
			</thead>	
<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "salaodebeleza";
$sql = "SELECT * FROM cadastrologin";

$conecta = mysqli_connect($localhost, $user, $passw, $banco) or die ("Erro ao conectar");
?>

<?php

	$Resultado = mysqli_query($conecta, $sql);

while ($tbl = mysqli_fetch_array($Resultado))
{
	$ID = $tbl['id'];
	$nome = $tbl['Nome'];
	$Email = $tbl['Email'];
	
	echo"<TR>";
	echo"<TD>$ID";
	echo"</TD>";

	
	echo"<TD>$nome";
	echo"</TD>";

	
	echo"<TD>$Email";
	echo"</TD>";

	
	echo"</TR>";
}
?>
</table>

<h3 style = "text-align: center"> Relatorio de Cadastro de clientes</h3>

<div class="table-responsive">	
		<table class="table table-dark table-hover">
			<thead>
			<TR>
			<TD>ID</TD>
			<TD>Nome</TD>
			<TD>E-mail</TD>
			<TD>Senha</TD>
			</TR>
			</thead>
<?php
	$sql = "SELECT * FROM cadastroclientes";
	$Resultado = mysqli_query($conecta, $sql);

while ($tbl = mysqli_fetch_array($Resultado))
{
	$ID = $tbl['id'];
	$nome = $tbl['Nome'];
	$Email = $tbl['Email'];
	$senha = $tbl['Senha'];
	
	echo"<TR>";
	echo"<TD>$ID";
	echo"</TD>";

	
	echo"<TD>$nome";
	echo"</TD>";

	
	echo"<TD>$Email";
	echo"</TD>";

	
	echo"<TD>$senha";
	echo"</TD>";

	
	echo"</TR>";
}

?>
</table>
</br>
<h3 style = "text-align: center"> Relatorio de Cadastro de funcionarios</h3>

<div class="table-responsive">	
		<table class="table table-dark table-hover">
			<thead>
			<TR>
			<TD>ID</TD>
			<TD>Nome</TD>
			<TD>CPF</TD>
			<TD>Data Nasc</TD>
			<TD>Telefone</TD>
			<TD>E-mail</TD>
			<TD>Endereço</TD>
			<TD>Cargo</TD>
			</TR>
			</thead>	
<?php
	$sql = "SELECT * FROM cadastrofuncionarios";
	$Resultado = mysqli_query($conecta, $sql);

while ($tbl = mysqli_fetch_array($Resultado))
{
	$ID = $tbl['id'];
	$nome = $tbl['Nome'];
	$cpf = $tbl['Cpf'];
	$data = $tbl['DataNasc'];
	$tele = $tbl['Telefone'];
	$email = $tbl['Email'];
	$endereco = $tbl['Endereco'];
	$cargo = $tbl['Cargo'];
	
	echo"<TR>";
	echo"<TD>$ID";
	echo"</TD>";

	
	echo"<TD>$nome";
	echo"</TD>";

	
	echo"<TD>$cpf";
	echo"</TD>";

	
	echo"<TD>$data";
	echo"</TD>";

	
	echo"<TD>$tele";
	echo"</TD>";

	
	echo"<TD>$email";
	echo"</TD>";

	
	echo"<TD>$endereco";
	echo"</TD>";

	
	echo"<TD>$cargo";
	echo"</TD>";

	
	echo"</TR>";
}
?>
</table>
</body>
</html>