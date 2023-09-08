<?php require 'funciones.php';
$conexion = conexion('db_galeria','root','');
if(!$conexion){
    header('Location: index.php');
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
    header('Location: index.php');
}

$statement = $conexion->prepare('SELECT * FROM tb_galeria WHERE id_imagen = :id');
$statement->execute(array(':id' => $id));
$foto = $statement->fetch();

if(!$foto){
    //header('Location: index.php');
    echo "No se encontro la foto";
}

require 'views/foto.view.php';
?>