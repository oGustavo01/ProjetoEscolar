<?php
$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "salaodebeleza";

$conecta = mysqli_connect($localhost, $user, $passw, $banco) or die ("Erro ao conectar");


if(isset($_POST['cadastrar'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		
		
		
		$query = mysqli_query($conecta, "INSERT INTO cadastrologin (Nome, Email) VALUES ('$name', '$email')");
		
		if($query){
			
			echo 'Cadastro realizado com sucesso!!';
			} else {
				echo 'Não foi possivel realizar o Cadastro!!';
			}
	} 
?>

