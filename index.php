<!DOCTYPE html>
<html>

<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="container-fluid bg" >
		<section class="row justify-content-center">
			<section class="col-12 col-sm-6 col-md-3">
				<form method="post" class="nose">
					<div class="input-group flex-nowrap">
						<input type="text" name="name" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>
					<button type="submit" class="btn btn-primary" name="register">Enviar</button>
				</form>
			</section>
		</section>
	</section>

	<?php
	include("registrar.php");
	?>
</body>

</html>