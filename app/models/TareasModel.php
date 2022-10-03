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

        // actualiza una tarea

        function updateTarea($id) {
            $sentencia = $this->db->prepare('UPDATE tarea SET completed=1 WHERE id=?');
            $sentencia->execute([$id]); 
        }

        // elimina una tarea

        function deleteTarea($id) {
            $sentencia = $this->db->prepare('DELETE FROM tarea WHERE id=?');
            $sentencia->execute([$id]);
        }
    }



?>