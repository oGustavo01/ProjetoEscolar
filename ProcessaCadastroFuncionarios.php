<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "salaodebeleza";

$conecta = mysqli_connect($localhost, $user, $passw, $banco) or die ("Erro ao conectar");


	if(isset($_POST['cadastrar'])){
		
		$name = $_POST['name'];
		$cpf = $_POST ['cpf'];
		$nasc = $_POST['nasc'];
		$telefone = $_POST ['telefone'];
		$email = $_POST['email'];
		$endereco = $_POST ['endereco'];
		$cargo = $_POST ['cargo'];
		
		
		$query = mysqli_query($conecta, "INSERT INTO cadastrofuncionarios (Nome, Cpf, DataNasc, Telefone, Email, Endereco, Cargo) VALUES ('$name', '$cpf', '$nasc', '$telefone', '$email', '$endereco', '$cargo')");
		
		if($query){
			
			echo 'Cadastro realizado com sucesso!!';
			} else {
				echo 'Não foi possivel realizar o Cadastro!!';
			}
	} 
?>