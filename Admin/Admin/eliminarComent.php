<?php
include_once('navbar.php');

if(isset($_GET['del'])){

borrarComent($_GET['del']);

  }
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Eliminar</h1>
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
                            <th style="width: 10%">
                                Foto
                            </th>
                            <th style="width: 20%">
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
                    krsort($comentario);
                    $producto = obtenerProductos();
                    
                    foreach ($comentario as $c) {
                    ?>
                        <tbody>
                            <tr>
                                <td>
                                <img alt="Avatar" class="table-avatar" src="../../imagenes/<?php echo $producto[$c['producto']]['imagen'] ?>">
                                </td>
                                <td>
                                    <a>
                                        <?php echo $c['fecha'] ?>
                                    </a>
                                    <br />
                                </td>
                                <td>
                                    <a>
                                        <?php echo $c['nombre'] ?>
                                    </a>
                                    <br />
                                </td>
                                <td>
                                    <a>
                                        <?php echo $c['comentario'] ?>
                                    </a>
                                    <br />
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-danger btn-sm" href="eliminarComent.php?del=<?php echo $c['nombre']?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php
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