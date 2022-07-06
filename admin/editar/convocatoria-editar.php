<?php 
 $namepage = "Convocatoria";
 $librerias = '<script
 src="https://code.jquery.com/jquery-3.6.0.js"
 integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
 crossorigin="anonymous"></script><link href="../lib/datatable/jquery.dataTables.min.css" rel="stylesheet"> <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>';
 include('../../Datos/funcionesbd.php');
 include('../../vistas/admin/template/header.php');
 if(isset($_GET['id']) && isset($_GET['editar']) && $_GET['editar'] == 1){
    $datos = Convocatoria_show($_GET['id']);

}
if(isset($_GET['id']) && isset($_GET['update']) && $_GET['update'] == 1){
    $rutaImagen = "";
    if(isset($_FILES['file_picture'])){
        $ulr = "../../".$_POST['imagen']."";
        unlink($ulr);
        $directorio = '../../archivos/img/';
        $subir_archivo = $directorio . basename($_FILES['file_picture']['name']);
        if (move_uploaded_file($_FILES['file_picture']['tmp_name'], $subir_archivo)) {
            $rutaImagen = 'archivos/img/' . basename($_FILES['file_picture']['name']);
        } else {
            echo "Error al subir la imagen";    
        }
    }
     
  

     print_r(Convocatoria_update($_GET['id'],$_POST['titulo'], "", $_POST['descripcion'], $_POST['duracion'], '', $rutaImagen, $_POST['Enlace'], "convocatoria", 1));
     if(Convocatoria_update($_GET['id'],$_POST['titulo'], "", $_POST['descripcion'], $_POST['duracion'], '', $rutaImagen, $_POST['Enlace'], "convocatoria", 1) == 1){
         echo "<script>alert('Se actualizo correctamente');</script>";
         header("location: ../editar/convocatoria-editar.php?id=".$_GET['id']."&editar=1");
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
                    <h4>En esta seccion podras  configurar lo que aparece en la pagina de <?php echo $namepage; ?></h4>
                    <div class="col-lg-5 col-md-6">
                      
                    <form method="POST" action="../editar/convocatoria-editar.php?id=<?php echo $_GET['id'];?>&update=1" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input class="form-control" id="titulo" type="text" name="titulo" value="<?php print_r($datos[0]['titulo']); ?>" ></input>
                        
                        </div>
                       <div class="form-group">
                            <label for="Duracion">Duracion</label>
                            <input type="date" class="form-control" id="Duracion" name="duracion" value="<?php print_r($datos[0]['duracion']); ?>" ></input>
                        </div>
                        
                        <div class="form-group">
                            <label for="Descripcion">Descripcion</label>
                            <textarea class="form-control" id="Descripcion" name="descripcion" rows="3"><?php print_r($datos[0]['descripcion']); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Enlace">Enlaces Para Mas informacion</label>
                            <input type="url" class="form-control" name="Enlace"  value="<?php print_r($datos[0]['enlace']); ?>" >
                        </div>
                        
                        <div class="form-group">
                            <label for="Imagen">Imagen</label>
                            <input type="file" class="form-control" name="file_picture">
                            <input type="hidden" name="imagen" value="<?php print_r($datos[0]['imagen']); ?>">
                            <?php if(empty($datos[0]['imagen'])){ ?>
                                <p>No hay imagen</p>
                            <?php }else{ ?>
                                <img src="../../<?php print_r($datos[0]['imagen']); ?>" width="100px" height="100px">
                            <?php } ?>
                        </div>
                        

                       <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                    </div>
                </div>
    
                <?php if (empty($guia_tabs)) {
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
                 
                        <?php  foreach ($guia_tabs as $key) { ?> 
                              <tr>
                            <td><?php echo $key['titulo']; ?></td>
                            <td><?php echo $key['subtitulo']; ?></td>
                            <td><?php echo $key['descripcion']; ?></td>
                            <td><?php echo $key['duracion']; ?></td>
                            <td>
                                <a href="../admin/Editar/convocatoria-editar.php?id=<?php echo $key['idDocumentos']; ?>&editar=1">Editar</a>
                                <a href="../admin/convocatoria.php?id=<?php echo $key['idDocumentos']; ?>&delete=1">Eliminar</a>
                            </td> 
                         </tr>
                        <?php } ?>
                  

                </tbody>
            </table>
        <?php } ?>
            </div>
            
        </section>    
   <?php include('/xampp/htdocs/emprendimeinto/vistas/admin/template/footer.php');?>