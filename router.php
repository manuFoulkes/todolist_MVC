<?php
require_once './app/controllers/TareasController.php';

define('BASE_URL', 'http://'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // action por defecto
if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la url a un arreglo. Ej: dev/juan --> ['dev', 'juan']
$params = explode('/', $action);

// instancia el unico controlador que tiene la app por el momento
$taskController = new TareasController();

// tabla de ruteo

switch($params[0]) {
    case 'list':
        $taskController->mostrarTareas();
        break;
    case 'agregarTarea':
        $taskController->agregarTarea();
        break;
}