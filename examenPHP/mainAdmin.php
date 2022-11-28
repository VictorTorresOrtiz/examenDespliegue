<?php
    include_once 'autoload.php';

    use app\VideoClub;

    if ($_GET) {
        $err = $_GET['errores'];
    }
    session_start();
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
    <?php
      $usuario_default = $_SESSION['user'] ?? ''; 
      $productos = $_SESSION['productos'] ?? '';
      $socios = $_SESSION['socios'] ?? '';

      if ($usuario_default === 'admin') { 
    ?>

    <h1>Bienvenido <?php echo $usuario_default?></h1>
    <a href="logout.php">
        <button type="button" class="btn btn-danger">Logout</button>
    </a>
    <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h3 class="display-8 fw-bold">Productos</h3>
                <h5 class="display-10 fw-bold"><?php echo 'Número de productos: ' . count($productos); ?></h5>
                <table class="table table-dark table-sm p-4">
                    <thead>
                        <tr>
                            <th scope="col" class="p-3">Resumen</th>
                            <th scope="col" class="p-3">Disponible</th>
                            <th scope="col" class="p-3">Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($productos as $key => $value) {
                            echo '<tr>';
                            echo '<td class="p-3 align-middle">';
                            echo $value->muestraResumen();
                            echo '</td>';
                            echo '<td class="p-3 align-middle">' . (($value->alquilado) ? 'Alquilado' : 'Disponible') . '</td>';
                            echo '<td class="p-3 align-middle">' . str_replace('app\\', '', get_class($value)) . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h3 class="display-8 fw-bold">Socios</h3>
                <h5 class="display-10 fw-bold"><?php echo 'Número de socios: ' . count($socios); ?></h5>
                <table class="table table-dark table-sm">
                    <thead>
                        <tr>
                            <th scope="col" class="p-3">Número</th>
                            <th scope="col" class="p-3">Nombre</th>
                            <th scope="col" class="p-3">usuario</th>
                            <th scope="col" class="p-3">Alquilado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($socios as $key => $value) {
                            echo '<tr>';
                            echo '<td class="p-3">' . $value->getNumero() . '</td>';
                            echo '<td class="p-3">' . $value->nombre . '</td>';
                            echo '<td class="p-3">' . $value->getnombreUsuario() . '</td>';
                            echo '<td class="p-3">';
                            echo $value->listaAlquileres();
                            echo '</td>';
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    <?php } else { ?>
      <h1>No estas autorizado</h1>
      <a href="index.php">
        <button type="button" class="btn btn-danger">Inicia Sesión</button>
      </a>
    <?php } ?>
  </body>
</html>


