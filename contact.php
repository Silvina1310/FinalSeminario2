<!--
 *
 * Silvina Páez
 *-->


<?php
include('db.php');
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['subject']) && !empty($_POST['subject']))){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$to = "almabru1310@gmail.com";
	$headers = "From : Arte en Hierro <almabru1310@gmail.com>\r\n" . $email;
	if( mail($to, $subject, $message, $headers)){
	$query = "INSERT INTO `contacto` (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
		
                echo "<center>_____________________________________________________________________</center>";
                echo "<center>_____________________________________________________________________</center>";
		echo "<center>E-Mail Enviado con exito, nos pondremos en contacto con usted pronto. </center>";
               
	}     
}
?>
<html>
<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
 <title>Formulario de Contacto</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
 <link rel="stylesheet" href="css/bootstrap.min.css"/>
              
 <script src="js/jquery2.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="main.js"></script>
 
 
 <link rel="stylesheet" href="css/styles.css" >
 <link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
<body>
    
    
    <div class="container">
      <form class="form-contact" method="POST">
        <h2 class="form-contact-heading">Ficha de Contacto</h2>
        <label for="inputName" class="sr-only">Nombre y Apellido</label>
        	<input type="name" name="name" id="inputName" class="form-control" placeholder="Su nombre y apellido" required>   
        <label for="inputEmail" class="sr-only">E-Mail</label>
        	<input type="email" name="email" id="inputEmail" class="form-control" placeholder="name@email.com" required>  
                
        <label for="inputSubject" class="sr-only">Asunto</label>
        	<input type="name" name="subject" id="inputSubject" class="form-control" placeholder="Asunto/Sector" required>
        <label for="inputMessage" class="sr-only">Mensaje</label>
    		<textarea name="message" class="form-control" id="inputMessage" rows="3"></textarea>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar Formulario</button>
      </form>
</div>
    
    
    
    
    
 
    
    
   
  
    
<div class="wait overlay">   <!--todo este div-->
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
                         <!--todo este buttomn-->   
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
                                <li><a href="destacados.php"><span class="glyphicon glyphicon-modal-window"></span>Producto</a></li>
                                
                  
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
					<div class="panel-footer"></div>  <!--todo este div-->
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
				<!--2511todo este div--> <div class="panel-footer" id="e_msg"></div>
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
		<div class="contenedor">
			<div class="col-md-1"></div>
			
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
                                            
                                            
                                        
                                            
                                            
                                            
                                            
					</div>
				</div>
				<div class="panel panel-success">   <!--en vez de success VA info-->
                                    
                                    
                                                    
                                    
                                    
                                    
					
                                        
                                        
                                        
                                        
                                        
                                        
                                        
					
						
                                            
                                             
                                                
                                                
                                                
                                       <div class="ver">          
					
					<div class="panel-footer"> 
                                            <a class="footer" href="https://github.com/Silvina1310">IFTS 16 | Seminario 2 | Silvina Noemí Páez</a>
                                             </div>
				
			</div>
                            </div>
			<div class="col-md-1"></div>
		</div>
	</div>
        
    
     
        
        
  </div>      
        
</body>