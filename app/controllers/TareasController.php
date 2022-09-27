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
    }




?> 