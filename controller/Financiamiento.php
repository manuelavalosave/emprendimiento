<?php
    include('/xampp/htdocs/emprendimeinto/Datos/funcionesbd.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $rutaImagen = "";
        if(isset($_FILES['file_picture'])){
            $directorio = '../archivos/img/';
            $subir_archivo = $directorio . basename($_FILES['file_picture']['name']);
            if (move_uploaded_file($_FILES['file_picture']['tmp_name'], $subir_archivo)) {
                $rutaImagen = 'archivos/img/' . basename($_FILES['file_picture']['name']);
            } else {
                echo "Error al subir la imagen";    
            }
        }

        
        
         if (Financimiento_insert($_POST['titulo'], "", $_POST['descripcion'], $_POST['duracion'], "", $rutaImagen, $_POST['Enlace'], "Financimiento", 1) == 1) {
             header("location: ../admin/Financimiento.php");
         }
         
    }
    
    $guia_tabs = Financimiento_all();

    ?>