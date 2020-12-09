<!--
 * Silvina Páez
 -->
<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    <?php include "./templates/sidebar.php"; ?>
      <div class="row">
      	<div class="col-10">
      		<h2>Lista de Productos</h2>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Agregar Producto</a>
      	</div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Categoría</th>
              <th>Rango de Precios</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody id="product_list">
              <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td><a class="btn btn-sm btn-info"></a><a class="btn btn-sm btn-danger">Eliminar</a></td>
            </tr> 
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<!-- Agregar producto Inicio -->
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
		        		<input type="text" name="product_name" class="form-control" placeholder="Ingrese el producto">
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
		        			<option value="">Elija la Categoría</option>
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
                <label>Cantidad de Producto</label>
                <input type="number" name="product_qty" class="form-control" placeholder="Ingrese cantidad del producto">
              </div>
            </div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Precio del Producto</label>
		        		<input type="number" name="product_price" class="form-control" placeholder="Ingrese el precio">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Palabras Clave del Producto <small>(eg: % 500 a 700, Decoración Interior, Tucán)</small></label>
		        		<input type="text" name="product_keywords" class="form-control" placeholder="Ingrese palabras clave">
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
<!-- Fin de agregar producto -->
<!-- Editar producto del Inicio  -->
<div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-product-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Nombre del Producto</label>
                <input type="text" name="e_product_name" class="form-control" placeholder="Ingrese el nombre">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Rango de Precios</label>
                <select class="form-control brand_list" name="e_brand_id">
                  <option value="">Elija Rango de Precios</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Nombre de la Categoría</label>
                <select class="form-control category_list" name="e_category_id">
                  <option value="">Elija Categoría</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Descripción del Producto</label>
                <textarea class="form-control" name="e_product_desc" placeholder="Ingrese la descripción"></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Cantidad del producto</label>
                <input type="number" name="e_product_qty" class="form-control" placeholder="Ingrese la cantidad del producto">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Precio del Producto</label>
                <input type="number" name="e_product_price" class="form-control" placeholder="Ingrese precio">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Palabras Clave del Producto <small>(eg: $ 500 a 700, Decoración Interior,moto)</small></label>
                <input type="text" name="e_product_keywords" class="form-control" placeholder="Ingrese palabras clave">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Imagen del Producto <small>(format: jpg, jpeg, png)</small></label>
                <input type="file" name="e_product_image" class="form-control">
                <img src="../product_images/1.0x0.jpg" class="img-fluid" width="50">
              </div>
            </div>
            <input type="hidden" name="pid">
            <input type="hidden" name="edit_product" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary submit-edit-product">Agregar Producto</button>
            </div>
          </div> 
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Fin de editar producto -->
<?php include_once("./templates/footer.php"); ?>
<script type="text/javascript" src="./js/products.js"></script>