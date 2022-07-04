<?php
 include('/xampp/htdocs/emprendimeinto/Datos/conf.php');
  function InsertarPaginaDeIncio($titulo,$subtitulo,$descripcion,$duracion,$documento,$imagen, $enalce, $tipo, $id_adm){
    $sql = "INSERT INTO `documentos`( `titulo`, `subtitulo`, `descripcion`, `duracion`, `documento`, `imagen`, `enlace`, `tipo`, `fk_admin`) VALUES ('$titulo','$subtitulo','$descripcion','$duracion','$documento','$imagen', '$enalce', '$tipo', $id_adm)";
    $conexion = bd();
    $insertar = $conexion->query($sql);
    return $insertar;
}

  function informacionInicio(){
    $sql = "SELECT * from documentos WHERE tipo='inicio'";
    $conexion = bd();
    $buscar = $conexion->query($sql);
    $datosb = array();
    while ($row = $buscar->fetch_assoc()){
      $datosb[] = $row;
  }
    return $datosb;
  }

  function EliminiarInformacion($id){
    $sql = "DELETE FROM `documentos` WHERE 	idDocumentos=$id";
    $conexion = bd();
    $eliminar = $conexion->query($sql);
    return $eliminar;
  }

  function Mostrar_informacion_index($id){
    $sql = "SELECT * from documentos WHERE idDocumentos=$id";
    $conexion = bd();
    $buscar = $conexion->query($sql);
    $datosb = array();
    while ($row = $buscar->fetch_assoc()){
      $datosb[] = $row;
  }
    return $datosb;
  }

  function Actualizar_informacion_index($id,$titulo,$subtitulo,$descripcion,$duracion){
    $sql = "UPDATE `documentos` SET `titulo`='$titulo',`subtitulo`='$subtitulo',`descripcion`='$descripcion',`duracion`='$duracion' WHERE idDocumentos=$id";
    $conexion = bd();
    $actualizar = $conexion->query($sql);
    return $actualizar;
  }


  //crear las funciones crud de guia
  function Guia_all(){
    $sql = "SELECT * from documentos WHERE tipo='guia'";
    $conexion = bd();
    $buscar = $conexion->query($sql);
    $datosb = array();
    while ($row = $buscar->fetch_assoc()){
      $datosb[] = $row;
  }
    return $datosb;
  }
  function Guia_insert($titulo,$subtitulo,$descripcion,$duracion,$documento,$imagen, $enalce, $tipo, $id_adm){
    $sql = "INSERT INTO `documentos`( `titulo`, `subtitulo`, `descripcion`, `duracion`, `documento`, `imagen`, `enlace`, `tipo`, `fk_admin`) VALUES ('$titulo','$subtitulo','$descripcion','$duracion','$documento','$imagen', '$enalce', '$tipo', $id_adm)";
    $conexion = bd();
    $insertar = $conexion->query($sql);
    return $insertar;
  }
  function Guia_delete($id){
    $sql = "DELETE FROM `documentos` WHERE 	idDocumentos=$id";
    $conexion = bd();
    $eliminar = $conexion->query($sql);
    return $eliminar;
  }
  function Guia_update($id,$titulo,$subtitulo,$descripcion,$duracion,$documento,$imagen, $enalce, $tipo, $id_adm){
    $sql = "UPDATE `documentos` SET `titulo`='$titulo',`subtitulo`='$subtitulo',`descripcion`='$descripcion',`duracion`='$duracion',`documento`='$documento',`imagen`='$imagen',`enlace`='$enalce',`tipo`='$tipo',`fk_admin`='$id_adm' WHERE idDocumentos=$id";
    $conexion = bd();
    $actualizar = $conexion->query($sql);
    return $actualizar;
  }
  function Guia_show($id){
    $sql = "SELECT * from documentos WHERE idDocumentos=$id";
    $conexion = bd();
    $buscar = $conexion->query($sql);
    $datosb = array();
    while ($row = $buscar->fetch_assoc()){
      $datosb[] = $row;
  }
    return $datosb;
  }
?>