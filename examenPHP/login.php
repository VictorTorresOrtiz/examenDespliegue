<?php

include_once 'autoload.php';
include_once "index5.php";

$usuario_default = "usuario";
$contraseña_default = "usuario";

$usuario_admin = "admin";
$contraseña_admin = "admin";

$usuario = $_POST["user"];
$contraseña = $_POST["password"];

if ($usuario == $usuario_default && $contraseña == $contraseña_default){
    session_start();
    $_SESSION["user"] = $usuario;
    header("location: main.php");
    exit();
} elseif ($usuario == $usuario_admin && $contraseña == $contraseña_admin){
    session_start();
    $_SESSION['user'] = $usuarioName;
    $_SESSION['socios'] = $vc->getSocios();
    $_SESSION['productos'] = $vc->getProductos();
    
    header('location:./mainAdmin.php');
}else {
    header('location:./index.php?errores=login');
}
