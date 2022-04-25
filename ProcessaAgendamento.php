<?php
	#Arquivo para conectar com o Banco
	include('conexao.php');

	if(isset($_POST['cadastrar'])){
			
			#Variaveis das tags
			$name = $_POST['name'];
			$data = $_POST['date'];
			$hora = $_POST['time'];
			$nomeprofi = $_POST['name2'];
			$servico = $_POST['servico'];
			$pagamen = $_POST['pagamen'];

			#Query para inserir os dados no Banco
			$query = mysqli_query($conecta, "INSERT INTO cadastroagendamento (Nome, Servico, NomeProfissional, Hora, Data, Metodopagamento) 
			VALUES ('$name', '$servico', '$nomeprofi', '$hora', '$data', '$pagamen')");
			
			#Variaveis das tags
			$sucesso = file_get_contents("Sucesso.php");
			$falha = file_get_contents("falha.php");
			
			#IF se o banco vai receber os dados ou não
			if($query){
				
				print $sucesso;
				
			} else {
					echo $falha;
				}
	} 	
?>