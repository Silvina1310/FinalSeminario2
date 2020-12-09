<!--
 *
 * Silvina Páez
 *-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Arte en Hierro</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
                <link rel="stylesheet" type="text/css" href="css/styles.css">
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
			<!--	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">Navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>-->
				<a href="#" class="navbar-brand">Arte en Hierro</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
                                <li><a href="about_us.php"><span class="glyphicon glyphicon-modal-window"></span>Nosotros</a></li>
			<!-- ahora-->
                        <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span>Contacto</a></li>
                                
                                
			</ul>
		   
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
				
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	
                                                

					
				
		
			
		
	
                        
                        
                        
                        
                        
                        <!-- -->
                       <!-- </ul>-->
                    
                </div>   
                </div>
        </div>
                    
                <div class="texto">
                    <p><pre>
                        <br>En CABA- Argentina hemos revolucionado el mundo de la decoración con hierro recuperado.</br>
                        <br>Ahora tú también puedes adquirir uno de nuestros productos:</br>
                        </pre>
                        <br>* Materiales recuperados de fundiciones, talleres, fábricas, etc.</br>
                        <br>* Hierro de obra, hierro dulce, chapa, metales de distintas aleaciones.</br>
                        <br>* Todo en uno para darte el toque de arte que necesita tu hogar.</br>
                        <br>* Diseños exclusivos.</br>
                        <br>* Dirección: Unquera 1700 - CABA </br>  
                        <br>* Teléfono: 1534282033</br>
                        <br>* email: alamabru1310@gmail.com</br>
                    </p>

                </div>
        <footer>
            <a href="https://github.com/Silvina1310">IFTS 16 | Seminario 2 | Silvina Noemí Páez</a>
        </footer>
