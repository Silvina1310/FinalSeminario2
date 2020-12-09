<!--/**
 * Silvina Páez
 */-->
<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    <?php include "./templates/sidebar.php"; ?>
      <div class="row">
      	<div class="col-10">
      		<h2>Clientes</h2>
      	</div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Pedido #</th>
              <th>Producto Id</th>
              <th>Nombre Producto</th>
              <th>Cantidad</th>
              <th>Id de Transacción</th>
              <th>Estado de pago</th>
            </tr>
          </thead>
          <tbody id="customer_order_list">
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<!--  -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-product-form" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Nombre del Producto</label>
		        		<input type="text" name="product_name" class="form-control" placeholder="Ingrese el nombre del producto">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Rango de Precios</label>
		        		<select class="form-control brand_list" name="brand_id">
		        			<option value="">Elegir Rango de Precios</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Nombre de la Categoría</label>
		        		<select class="form-control category_list" name="category_id">
		        			<option value="">Elegir Categoría</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Descripción del Producto</label>
		        		<textarea class="form-control" name="product_desc" placeholder="Ingrese descripción"></textarea>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Precio del Producto</label>
		        		<input type="number" name="product_price" class="form-control" placeholder="Ingrese precio">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Palabras Clave del Producto <small>(ej: $ 500 , Decoración Interior, moto)</small></label>
		        		<input type="text" name="product_keywords" class="form-control" placeholder="Ingrese las palabras clave del producto">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Imagen del Producto <small>(format: jpg, jpeg, png)</small></label>
		        		<input type="file" name="product_image" class="form-control">
		        	</div>
        		</div>
        		<input type="hidden" name="add_product" value="1">
        		<div class="col-12">
        			<button type="button" class="btn btn-primary add-product">Agregar Producto</button>
        		</div>
        	</div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- -->
<?php include_once("./templates/footer.php"); ?>
<script type="text/javascript" src="./js/customers.js"></script>