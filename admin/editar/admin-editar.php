<?php
$namepage = "inicio";
$librerias = '<script
src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script><link href="../lib/datatable/jquery.dataTables.min.css" rel="stylesheet"> <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>';
include('/xampp/htdocs/emprendimeinto/datos/funcionesbd.php');
include('/xampp/htdocs/emprendimeinto/vistas/admin/template/header.php');

if(isset($_GET['id']) && isset($_GET['editar']) && $_GET['editar'] == 1){
    $datos = Mostrar_informacion_index($_GET['id']);

}

if(isset($_GET['id']) && isset($_GET['update']) && $_GET['update'] == 1){
    print_r(Actualizar_informacion_index($_GET['id'],$_POST['titulo'],$_POST['subtitulo'],$_POST['descripcion'],$_POST['duracion']));
    if(Actualizar_informacion_index($_GET['id'],$_POST['titulo'],$_POST['subtitulo'],$_POST['descripcion'],$_POST['duracion']) == 1){
        echo "<script>alert('Se actualizo correctamente');</script>";
        header("location: ../editar/admin-editar.php?id=".$_GET['id']."&editar=1");
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
            
                <form method="POST" action="../editar/admin-editar.php?id=<?php echo $_GET['id'];?>&update=1" >

                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input class="form-control" name="titulo" id="titulo" type="text" value="<?php print_r($datos[0]['titulo']); ?>"></input>

                    </div>
                    <div class="form-group">
                        <label for="Subtitulo">Subtitulo</label>
                        <input class="form-control" name="subtitulo" id="Subtitulo" type="text" value="<?php print_r($datos[0]['subtitulo']); ?>"></input>

                    </div>
                    <div class="form-group">
                        <label for="Descripcion">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="Descripcion" rows="3"><?php print_r($datos[0]['descripcion']); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Duracion">Duracion</label>
                      <input class="form-control" name="duracion" id="Duracion" type="date" value="<?php print_r($datos[0]['duracion']); ?>"></input>
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
           <br>
           <hr>
            
        </div>
        
    </div>

</section>
<?php include('/xampp/htdocs/emprendimeinto/vistas/admin/template/footer.php'); ?>