<?php session_start(); ?>
<!--/**
 * Silvina Páez
 */-->
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    <?php include "./templates/sidebar.php"; ?>
      <div class="row">
      	<div class="col-10">
      		<h2>Gestionar Precios</h2>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_brand_modal" class="btn btn-primary btn-sm">Agregar Rango de Precios</a>
      	</div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Acción</th>
            </tr>
          </thead>
          <tbody id="brand_list">
              <td><a class="btn btn-sm btn-info"></a><a class="btn btn-sm btn-danger">Eliminar</a></td>
            </tr> 
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<!--  -->
<div class="modal fade" id="add_brand_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Rango de Precios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-brand-form" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Rango de Precios</label>
		        		<input type="text" name="brand_title" class="form-control" placeholder="Ingrese rango de precios">
		        	</div>
        		</div>
        		<input type="hidden" name="add_brand" value="1">
        		<div class="col-12">
        			<button type="button" class="btn btn-primary add-brand">Agregar producto</button>
        		</div>
        	</div>	
        </form>
      </div>
    </div>
  </div>
</div>
<!--  -->
<!-- Editar rango de Precios -->
<div class="modal fade" id="edit_brand_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Rango de Precios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-brand-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <input type="hidden" name="brand_id">
              <div class="form-group">
                <label>Rango de Precios</label>
                <input type="text" name="e_brand_title" class="form-control" placeholder="Ingresar rango de precios">
              </div>
            </div>
            <input type="hidden" name="edit_brand" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary edit-brand-btn">Actualizar Rango de Precios</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
<!--  -->
<?php include_once("./templates/footer.php"); ?>
<script type="text/javascript" src="./js/brands.js"></script>