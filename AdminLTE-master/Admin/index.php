<?php
include_once('navbar.php');

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Administrador de productos</h1>
        </div>
      </div>
    </div>

    <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>AGREGAR</h3>

                <p>Agregar productos</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="agregar.php" class="small-box-footer">
                Agregar <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>EDITAR<sup style="font-size: 20px"></sup></h3>

                <p>Editar producto</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="projects.php" class="small-box-footer">
                Editar <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>ELIMINAR</h3>

                <p>Eliminar producto</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="eliminar.php" class="small-box-footer">
                Eliminar <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>

  </section>

  <!-- Main content -->
  <section class="content">

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once('footer.php');
?>
