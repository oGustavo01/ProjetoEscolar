<!DOCTYPE html>
<html lang="br">
<head>
  <title>Tela de agendamento do Cliente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="Styleagendamento.css" rel="stylesheet">
</head>

<body>
	
	<form method="POST" action="ProcessaAgendamento.php">
		<div class="quadra">
			<div class="container mt-3">
				  
				  <h2>Tela de agendamento do Cliente</h2>
				<!--Nomes-->
				<form method="POST" action="ProcessaAgendamento.php">
					<div class="mb-3 mt-3">
						<label for="uname" class="nomes1">Seu Nome: </label>
						<input type="text" class="form-control" id="uname" placeholder=" Digite seu Nome: " name="name" >
						
					</div>
					<div class="mb-3 mt-3">
						<label for="name" class="nomes2">Nome do Profissional: </label>
						<input type="name" class="form-control" id="name" placeholder=" Digite o nome do Profissional: " name="name2">
						
					</div>
				
					<form method="POST" action="ProcessaAgendamento.php">
					<!--Metodo de Pagamento-->				
									
							<div class="mb-3 mt-3">
								<label for="uname" class="nomes3">Escolha qual tipo de serviço deseja: </label>
								<ul>
									<li>Corte</li>
									<li>Tintura</li>
									<li>Manicure e pedicure</li>
									<li>Design de sombrancelha</li>
								</ul>
								<input type="text" class="form-control" id="uname" placeholder=" Ex.: Corte " name="servico" >
							</div>
							
					<!--Data e Hora de atendimento-->	
							<div class="mb-3 mt-3">
								  <label class="nomes4">Digite a Data de atendimento: </label>
								  <input type="date" class="form-control"  placeholder=" Ex.: 00/00/0000 " name="date" >
									
							</div>
							
							<div class="mb-3 mt-3">
								  <label class="nomes5">Digite o Horário de atendimento: </label>
								  <input type="time" class="form-control"  placeholder=" Ex.: 00:00:00 " name="time" >
									
							</div>
							
						</form>
				
				<div class="mb-3 mt-3">
					<!--Formas de Pagamento-->
						<label for="uname" class="nomes6">Escolha a forma de pagamento: </label>
							<ul>
								<li>PIX</li>
								<li>Dinheiro</li>
								<li>Débito</li>
								<li>Crédito</li>
							</ul>
						<input type="text" class="form-control" id="uname" placeholder=" Ex.: Dinheiro " name="pagamen" >
				</div>
				</form>
						
						
					
			</br>
				<button type="submit" class="btn btn-primary" name="cadastrar">
				
					Agendar
				</button>	
			
			</div>		
						
				
		</div>		
	</form>
	
	
</body>
</html>