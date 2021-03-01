<?php

include("con_db.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
?>
			<div class="alert alert-success" role="alert">
				Te has inscrito correctamente
			</div>
		<?php
		} else {
		?>
			<div class="alert alert-danger" role="alert">
				opps ha ocurrido un error
			</div>
		<?php
		}
	} else {
		?>
		<div class="alert alert-danger" role="alert">
			Llenar todos los campos
		</div>
<?php
	}
}

?>