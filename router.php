<?php
require_once './app/controllers/TareasController.php';

define('BASE_URL', 'http://'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // Default action
if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);

$taskController = new TareasController();