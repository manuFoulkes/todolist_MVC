<?php

    

    class TareasModel {

        private $db;
         
        function __construct() {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=todo_list;charset=utf8', 'root', '');;
        }

        // muestra todas las tareas

        function GetTareas() {
            $sentecia = $this->db->prepare("SELECT * FROM tarea");
            $sentecia->execute();
            return $sentecia->fetchAll(PDO::FETCH_ASSOC); 
        }

        // Inserta una tarea

        function insertTarea($title, $description) {
            $sentecia = $this->db-> prepare('INSERT INTO tarea(title, description) VALUES(?, ?)');
            $sentecia-> execute([$title, $description]);
        }

    }



?>