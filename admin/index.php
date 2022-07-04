<?php
$namepage = "inicio";
$librerias = '<script
src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script><link href="../lib/datatable/jquery.dataTables.min.css" rel="stylesheet"> <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>';
include('/xampp/htdocs/emprendimeinto/controller/Admin.php');
include('/xampp/htdocs/emprendimeinto/vistas/admin/template/header.php');

if(isset($_GET['id']) && $_GET['delete'] == 1){
    echo "<script>alert('Se elimino correctamente');</script>"; 
echo " aqui";
EliminiarInformacion($_GET['id']);
    if(EliminiarInformacion($_GET['id']) == 1){
        header("location: index.php");
    }
}
 


?>
<script type="text/javascript">
    $(document).ready(function() {

        $('#table_id').DataTable();
    });
</script>
<section id="guia" class="section-bg">
    <div class="container contenedorPagina">
        <div class="row">
            <h4>En esta seccion podras configurar lo que aparece en la pagina de <?php echo $namepage; ?></h4>


            </script>
            <div class="col-lg-5 col-md-6">
            
                <form method="POST" action="../controller/Admin.php" >
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input class="form-control" name="titulo" id="titulo" type="text"></input>

                    </div>
                    <div class="form-group">
                        <label for="Subtitulo">Subtitulo</label>
                        <input class="form-control" name="subtitulo" id="Subtitulo" type="text"></input>

                    </div>
                    <div class="form-group">
                        <label for="Descripcion">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="Descripcion" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Duracion">Duracion</label>
                      <input class="form-control" name="duracion" id="Duracion" type="date"></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
           <br>
           <hr>
            
        </div>
        <?php if (empty($inicio)) {
        } else { ?>
            <table id="table_id" class="display table ">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Subtitulo</th>
                        <th>Descripcion</th>
                        <th>Duracion</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                 
                        <?php  foreach ( $inicio as $key) { ?> 
                              <tr>
                            <td><?php echo $key['titulo']; ?></td>
                            <td><?php echo $key['subtitulo']; ?></td>
                            <td><?php echo $key['descripcion']; ?></td>
                            <td><?php echo $key['duracion']; ?></td>
                            <td>
                                <a href="../admin/Editar/admin-editar.php?id=<?php echo $key['idDocumentos']; ?>&editar=1">Editar</a>
                                <a href="../admin/index.php?id=<?php echo $key['idDocumentos']; ?>&delete=1">Eliminar</a>
                            </td> 
                         </tr>
                        <?php } ?>
                  

                </tbody>
            </table>
        <?php } ?>
    </div>

</section>
<?php include('/xampp/htdocs/emprendimeinto/vistas/admin/template/footer.php'); ?>