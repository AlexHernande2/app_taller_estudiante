<?php

require '../models/usuario.php';
require '../controllers/conexionDbController.php';
require '../controllers/baseController.php';
require '../controllers/UsuariosController.php';

use usuario\Usuario;
use usuarioController\UsuarioController;

$id = empty($_GET['codigo'])?'' : $_GET['codigo']; //Si es vacio
//lee los '' vacios, en caso contrario lee el $_GET
$titulo = 'Registrar Estudiante';
$urlAction = "accion_registro_usuario.php";
$usuario = new Usuario();
if (!empty($codigo)){
    $titulo = 'Modificar Usuario';
    $urlAction = "accion_modificar_usuario.php";
    $usuarioController = new UsuarioController();
    $usuario = $usuarioController->readRow($id);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
<h1><?php echo $titulo; ?></h1>
<form action=""></form>

    
</body>
</html>