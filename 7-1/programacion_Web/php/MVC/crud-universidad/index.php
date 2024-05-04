<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Universidad</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">CRUD Universidad</a>
    </nav>

    <div class="container mt-4">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php echo((isset($_GET['controller']) && $_GET['controller'] == 'CarreraController' || !isset($_GET['controller']))? 'active' : '') ?>" href="./index.php?controller=CarreraController&action=index">Carreras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo(isset($_GET['controller']) && $_GET['controller'] == 'AlumnosController' ? 'active' : '') ?>" href="./index.php?controller=AlumnosController&action=index">Alumnos</a>
            </li>
        </ul>

        <?php
            if (isset($_GET['controller']) && isset($_GET['action'])) {
                $controller = $_GET['controller'];
                $action = $_GET['action'];

                require_once "controllers/$controller.php";
                
                $controller = new $controller();

                $controller->$action();
            } else {
                require_once "controllers/CarreraController.php";
                
                $carreraController = new CarreraController();

                $carreraController->index();
            }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>