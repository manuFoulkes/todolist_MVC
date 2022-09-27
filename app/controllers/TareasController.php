<?php
    include_once '../view/TareasView.php';
    include_once '../model/TareasModel.php';

    class TareasController
    {

        private $view;
        private $model;

        function __construct()
        {
            $this->view = new TareasView();
            $this->model = new TareasModel();
        }

        function Home() {

            $Tareas = $this->model->GetTareas();
            $this->view->Mostrar($Tareas);

        }
    }




?> 