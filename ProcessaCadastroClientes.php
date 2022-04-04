<?php

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "salaodebeleza";

$conecta = mysqli_connect($localhost, $user, $passw, $banco) or die ("Erro ao conectar");


	if(isset($_POST['cadastrar'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$nasc = $_POST['nasc'];
		
		
		$query = mysqli_query($conecta, "INSERT INTO cadastroclientes (Nome, Email, Senha) VALUES ('$name', '$email', '$nasc')");
		
		if($query){
			
			echo 'Cadastro realizado com sucesso!!';
			} else {
				echo 'Não foi possivel realizar o Cadastro!!';
			}
	} 
?>