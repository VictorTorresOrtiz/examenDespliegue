<?php
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
    $_SESSION["admin"] = $usuario_admin;
    header("location: mainAdmin.php");
    exit();

} else {
    echo "No coindicen las credenciales";
    header("location: index.php");
}