<?php
include_once('navbar.php');
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Editar</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
            <th style="width: 2%">
                Id
              </th>
              <th style="width: 10%">
                Fecha
              </th>
              <th style="width: 20%">
                Nombre
              </th>
              <th style="width: 30%">
                Comentario
              </th>

              </tr>
          </thead>
          <?php 
            $comentario = obtenerComentarios();
            foreach ($comentarios as $c) {
                if($comentarios['producto'] == $c['producto']){
                        ?>
          <tbody>
            <tr>
              <td>
              <?php echo $c['producto'] ?>
              </td>
              <td>
                <a>
                <?php echo $producto['nombre'] ?>
                </a>
                <br />
              </td>
              <td>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <img alt="Avatar" class="table-avatar" src="../../imagenes/<?php echo $producto['imagen'] ?>">
                  </li>
                </ul>
              </td>
              <td>
                <ul class="list-inline">
                  <li class="list-inline-item">
                    
                  </li>
                </ul>
              </td>
              <td class="project-actions text-right">
                <a class="btn btn-info btn-sm" href="#">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
                </a>
              </td>
            </tr>
          </tbody>
          <?php
                        }
                    }
                        ?>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once('footer.php');
?>