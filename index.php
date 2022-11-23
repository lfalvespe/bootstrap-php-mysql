<?php

include_once('config.php');

    if (isset($_POST['submit'])) { 

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
		$sexo = $_POST['sexo'];
		$nasc = $_POST['nasc'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,nasc) 
        VALUES ('$nome', '$email', '$telefone', '$sexo', '$nasc')");
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário com Bootstrap - PHP + MySQL</title>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body style="background:#10030b">
	<header class="col-10 col-lg-5 mt-4 mx-auto bg-light display-6 text-center p-2 border border-info text-dark rounded">
		Formulário com Bootstrap - PHP + MySQL
	</header>


	<div class="col-10 col-lg-5 col-xl-5 container mt-5 rounded border border-warning p-3">
	
		<form method="post" action="" class="p-3 bg-light rounded shadow">
			<p class="display-7 text-secondary">Cadastrar novo usuário</p>
			
			<div class="form-floating">
				<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
				<label for="nome" class="text-info">Nome</label>
			</div>
			<div class="form-floating">
				<input type="email" name="email" id="email" class="form-control mt-2" placeholder="Email">
				<label for="email" class="text-info">Email</label>
			</div>
			<div class="form-floating">
				<input type="tel" name="telefone" id="telefone" class="form-control mt-2" placeholder="">
				<label for="telefone" class="text-info">Telefone</label>
			</div>

	
			<div>
				<p class="mt-2 text-secondary mb-1">Sexo </p>
				<input type="radio" name="sexo" id="masc" value="M" class="form-check-input">
				<label for="masc" class="form-check-label text-secondary">masculino</label>
				
				<input type="radio" name="sexo" id="fem" value="F" class="form-check-input ms-2">
				<label for="fem" class="form-check-label text-secondary">Feminino</label>
			</div>
		
			<p class="mt-2 text-secondary mb-1">Data de nascimento</p>

			<input type="date" name="nasc" id="nasc" class="form-control form-control text-secondary">


			
			<input type="submit" name="submit" value="Cadastrar" class="btn btn-primary mt-4">
		</form>
	
	</div>

	<div class="containe mt-5">
		<footer class="text-center text-light">
			Criado por <strong><a href="https://github.com/lfalvespe" class="text-decoration-none text-warning">Fernando Alves</a></strong> <br>
			lfalvespe@gmail.com
		</footer>
	</div>


	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
