<?php 
/**
 * Silvina Páez
 */

session_start();  
if (!isset($_SESSION['admin_id'])) {
  header("location:login.php");
}

include "./templates/top.php"; 

?>
 
<?php include "./templates/navbar.php"; ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <h2>Todos los Administradores</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Estado</th>
              <!--<th>Acción</th>  no desasrrollado-->
          </thead>
          <tbody id="admin_list">
             <tr>
              <td><a class="btn btn-sm btn-info"></a><a class="btn btn-sm btn-danger">Eliminar</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include "./templates/footer.php"; ?>
<script type="text/javascript" src="./js/admin.js"></script>
