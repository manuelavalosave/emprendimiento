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
     
    $rutaDocumento = "";
    if(isset($_FILES['file_document'])){
        $directorio = '../archivos/docs/';
        $subir_archivo = $directorio . basename($_FILES['file_document']['name']);
        if (move_uploaded_file($_FILES['file_document']['tmp_name'], $subir_archivo)) {
            $rutaDocumento = 'archivos/docs/' . basename($_FILES['file_document']['name']);
        } else {
            echo "Error al subir el documento";    
        }
    }
     if (Guia_insert($_POST['titulo'], "", $_POST['descripcion'], $_POST['duracion'], $rutaDocumento, $rutaImagen, 0, "guia", 1) == 1) {
         header("location: ../admin/guia.php");
     }
}

$guia_tabs = Guia_all();
