<?php

    include_once '../controller/TareasController.php';

    class TareasModel {

         
        function __construct() {
            
        }

        private function Connect() {
            $db = new PDO('mysql:host=localhost;'.'dbname=todo_list;charset=utf8', 'root', ''); 
            return $db;
        }

        function getTareas() {
            $sentecia = $this->db->prepare("SELECT * FROM tarea");
            $sentecia->execute();
            return $sentecia->fetchAll(PDO::FETCH_ASSOC); 
        }

    }



?>