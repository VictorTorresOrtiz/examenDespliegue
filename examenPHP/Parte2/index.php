<?php
session_start();
$usuario_default = "usuario";
$contraseña_default = "usuario";

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acceder a Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
  <body>
  <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 p-5 shadow-sm border rounded-3">
                <h2 class="text-center mb-4 text-primary">Login Form</h2>
                <form method="POST" action="login.php">
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuario</label>
                        <input type="text" class="form-control border border-primary" name="user" id="user" aria-describedby="userHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control border border-primary" name="password" id="password" required>
                    </div>
                    <div class="d-grid">
                        <input type="submit" name="submit"></input>
                    </div>
                </form>
            </div>
        </div>
  </body>
</html>

