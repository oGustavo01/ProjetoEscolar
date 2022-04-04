<?php
$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "salaodebeleza";

$conecta = mysqli_connect($localhost, $user, $passw, $banco) or die ("Erro ao conectar");


		$date = new DateTime("America/New_York");
		$date-> FORMAT ('Y-m-d');
		
		$localtime = localtime();
		$localtime_assoc = localtime(time(), true);

if(isset($_POST['cadastrar'])){
		
		$name = $_POST['name'];
		$data = $_POST['date'];
		$hora = $_POST['time'];
		$nomeprofi = $_POST['name2'];
		$servico = $_POST['servico'];
		$pagamen = $_POST['pagamen'];

		
		$query = mysqli_query($conecta, "INSERT INTO cadastroagendamento (Nome, Servico, NomeProfissional, Hora, Data, Metodopagamento) 
		VALUES ('$name', '$servico', '$nomeprofi', '$hora', '$data', '$pagamen')");
		
		
		if($query){
			
			echo 'Cadastro realizado com sucesso!!';
			} else {
				echo 'Não foi possivel realizar o Cadastro!!';
			}
	} 	
	
	
?>