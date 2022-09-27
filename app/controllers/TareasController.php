<?php
    include_once './app/models/TareasModel.php';
    include_once './app/views/TareasView.php';

    class TareasController {

        private $model;
        private $view;

        function __construct() {
            $this->model = new TareasModel();
            $this->view = new TareasView();
        }

        function mostrarTareas() {
            $tareas = $this->model->GetTareas();
            $this->view->showTareas($tareas);
        }

        function agregarTarea() {
            $title = $_POST['title'];
            $description = $_POST['description'];

            $tarea = $this->model->insertTarea($title, $description);
            header('Location: ' . BASE_URL);
        }

        function finalizarTarea($id) {
            $tarea = $this->model->updateTarea($id);
            header('Location: ' . BASE_URL);
        }
    }




?> 