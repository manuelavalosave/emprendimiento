<?php 
 $namepage = "Guia";
 include('/xampp/htdocs/emprendimeinto/vistas/admin/template/header.php');

?>

<section id="guia" class="section-bg">
            <div class="container contenedorPagina">
                <div class="row">
                    <h4>En esta seccion podras  configurar lo que aparece en la pagina de <?php echo $namepage; ?></h4>
                    <div class="col-lg-5 col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input class="form-control" id="titulo" type="text"></input>
                        
                        </div>
                       <div class="form-group">
                            <label for="Duracion">Duracion</label>
                            <textarea class="form-control" id="Duracion" rows="3"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="Descripcion">Descripcion</label>
                            <textarea class="form-control" id="Descripcion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Documentos">Documentos</label>
                            <input type="file" class="form-control" name="file_document">
                        </div>
                        
                        <div class="form-group">
                            <label for="Imagen">Imagen</label>
                            <input type="file" class="form-control" name="file_picture">
                        </div>
                        

                       <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                    </div>
                </div>
            </div>
            
        </section>    
   <?php include('/xampp/htdocs/emprendimeinto/vistas/admin/template/footer.php');?>