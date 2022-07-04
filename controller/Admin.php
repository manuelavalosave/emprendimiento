<?php
include('/xampp/htdocs/emprendimeinto/Datos/funcionesbd.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
      if(InsertarPaginaDeIncio($_POST['titulo'],$_POST['subtitulo'],$_POST['descripcion'],$_POST['duracion'],0,0, 0, "inicio", 1)== 1){
        header("location: ../admin/index.php");
      }
    }


  $inicio = informacionInicio();


?>