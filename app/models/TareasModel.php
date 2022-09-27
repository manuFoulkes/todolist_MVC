<?php

    

    class TareasModel {

        private $db;
         
        function __construct() {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=todo_list;charset=utf8', 'root', '');;
        }

        function GetTareas() {
            $sentecia = $this->db->prepare("SELECT * FROM tarea");
            $sentecia->execute();
            return $sentecia->fetchAll(PDO::FETCH_ASSOC); 
        }

    }



?>