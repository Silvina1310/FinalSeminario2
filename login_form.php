<!--
 *
 * Silvina Páez
 *-->
<?php
#esta es la página del formulario de inicio de sesión, si el usuario ya ha iniciado sesión, no se permite que el usuario acceda a esta página ejecutando isset ($ _ SESSION ["uid"])
#si la siguiente declaración devuelve verdadera, enviaremos al usuario a su página profile.php
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
//en la página action.php si el usuario hace clic en el botón "listo para pagar" esa vez pasaremos los datos en un formulario desde la página action.php
if (isset($_POST["login_user_with_product"])) {
	//esta es la lista de productos
	$product_list = $_POST["product_id"];
	//aquí estamos convirtiendo la lista en formato json porque la lista no se puede almacenar en una cookie
	$json_e = json_encode($product_list);
	//aquí se crea una cookie y el nombre de la cookie es product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Arte en Hierro</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
                <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Arte en Hierro</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                                <li><a href="about_us.php"><span class="glyphicon glyphicon-modal-window"></span>Nosotros</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alerta del formulario de registración-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Formulario de Inicio de Sesión del Cliente</div>
					<div class="panel-body">
						<!--Formulario de inicio de sesión del usuario-->
						<form onsubmit="return false" id="login">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email">Contraseña</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>
							<a href="#" style="color:#333; list-style:none;">Olvidó Contraseña</a><input type="submit" class="btn btn-success" style="float:right;" Value="Login">
							<!--Si el usuario no tiene una cuenta, hará clic en el botón Crear cuenta.-->
							<div><a href="customer_registration.php?register=1">Crea una cuenta nueva?</a></div>						
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>






















