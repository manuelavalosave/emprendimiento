<?php 
 $namepage = "Guia";
 $librerias = '<script
 src="https://code.jquery.com/jquery-3.6.0.js"
 integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
 crossorigin="anonymous"></script><link href="../lib/datatable/jquery.dataTables.min.css" rel="stylesheet"> <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>';
 include('../controller/Guia.php');
 include('../vistas/admin/template/header.php');
 
 if(isset($_GET['id']) && $_GET['delete'] == 1){
     echo "<script>alert('Se elimino correctamente');</script>"; 
     if(Guia_delete($_GET['id']) == 1){
         header("location: guia.php");
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
                    <form method="POST" action="../controller/Guia.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input class="form-control" id="titulo" type="text" name="titulo"></input>
                        
                        </div>
                       <div class="form-group">
                            <label for="Duracion">Duracion</label>
                            <input type="date" class="form-control" id="Duracion" name="duracion"></input>
                        </div>
                        
                        <div class="form-group">
                            <label for="Descripcion">Descripcion</label>
                            <textarea class="form-control" id="Descripcion" name="descripcion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Documentos">Documentos</label>
                            <input type="file" class="form-control" name="file_document" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"     >
                        </div>
                        
                        <div class="form-group">
                            <label for="Imagen">Imagen</label>
                            <input type="file" class="form-control" name="file_picture">
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
                                <a href="../admin/Editar/guia-editar.php?id=<?php echo $key['idDocumentos']; ?>&editar=1">Editar</a>
                                <a href="../admin/guia.php?id=<?php echo $key['idDocumentos']; ?>&delete=1">Eliminar</a>
                            </td> 
                         </tr>
                        <?php } ?>
                  

                </tbody>
            </table>
        <?php } ?>
            </div>
            
        </section>    
   <?php include('/xampp/htdocs/emprendimeinto/vistas/admin/template/footer.php');?>