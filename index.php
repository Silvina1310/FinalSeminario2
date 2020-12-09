<!--
 *
 * Silvina Páez
 *-->
<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
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
                <link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
<body>
<div class="wait overlay">   
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">Navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Arte en Hierro</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                                <li><a href="about_us.php"><span class="glyphicon glyphicon-modal-window"></span>Nosotros</a></li>
                                <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span>Contacto</a></li>     
			</ul>
		   <!--    <form class="navbar-form navbar-left">    
		       <div class="form-group">
		          <input type="text" class="form-control" placeholder="Buscar" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		        </form>     sin desarrollar lupa busqueda-->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Carrito<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Detalle: </div>
									<div class="col-md-3">Imagen del producto</div>
									<div class="col-md-3">Nombre del producto</div>
									<div class="col-md-3">Precio en  <?php echo CURRENCY; ?></div>
								</div>
							</div>                                                                                     
                                                 <!--todo este contenido div detalle carrito-->   
							<div class="panel-body">
								<div id="cart_product">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>
								</div>
							</div>
                                                 <!--todo este div hasta aca- detalle carrito-->
					<div class="panel-footer"></div>  
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Registrarse</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Ingreso</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Contraseña</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Olvidó contraseña</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
				                        <div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
				<div id="get_brand">
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">   
					</div>
				</div>
				<div class="panel panel-info">  
					<div class="panel-heading">Productos</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Aquí se obtiene el producto jquery Ajax Request-->     
						</div>     
					</div>
					<div class="panel-footer"> 
                                            <a class="footer" href="https://github.com/Silvina1310">IFTS 16 | Seminario 2 | Silvina Noemí Páez</a>
                                             </div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>     
</body>
</html>
















































