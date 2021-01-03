<!DOCTYPE html>
<html>
<head>
	<title>Adm - Login</title>
	<!-- IMPORTAR BOOTSTRAP CSS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>


	<div class="container">
		<br>

		<h2>Painel Administrativo - Login</h2>
		<br>
			<hr>
		<form action="check-login.php" method="POST">


			<div class="form-group">
				<input class="form-control" name="email" placeholder="E-mail" required=""/>	
			</div>
			<div class="form-group">
				<input class="form-control" name="senha" placeholder="Senha" required=""/>	
			</div>
			<hr>

			<button class="btn btn-primary" type="submit">Acessar</button>



		</form>

	</div>




</body>
</html>