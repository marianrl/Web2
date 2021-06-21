<?php
include_once('navbar.php');
if(isset($_GET['del'])){

  borrarProducto($_GET['del']);
  }
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Eliminar Productos</h1>
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
      <div class="card-body pad table-responsive">
            <table class="table table-bordered text-center">
            <td>
                    <a href="eliminar.php?id=" type="button" class="btn btn-block btn-danger btn-xs" > Borrar filtros </a>
            </td>
            <?php
                $producto = obtenerProductos();
	            foreach ($producto as $producto) {     
	        ?>
                <td>
                    <a href="eliminar.php?id=<?php echo $producto['id'] ?>" type="button" class="btn btn-block btn-primary btn-xs" > <?php echo cortar_palabras($producto['nombre'], 8) ?></a>
            <?php
                }
            ?>
                </td>
            </table>
            </div>
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">
                ID
              </th>
              <th style="width: 20%">
                Nombre del produco
              </th>
              <th style="width: 30%">
                Foto del producto
              </th>

              </tr>
          </thead>
         <?php
          $arrayProductos = json_decode(file_get_contents('../../array/producto.json'), TRUE);
                    foreach ($arrayProductos as $producto) {
                        $print = true;
                        if (!empty($_GET['categoria']) and $print) {
                            if ($producto['categoria'] != $_GET['categoria']) $print = FALSE;
                        }
                        if ($print) {
                          ?>
          <tbody>
            <tr>
              <td>
              <?php echo $producto['id'] ?>
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
                <a class="btn btn-danger btn-sm" href="eliminar.php?del=<?php echo $producto['id']?>" >
                  <i class="fas fa-pencil-alt">
                  </i>
                  Delete
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