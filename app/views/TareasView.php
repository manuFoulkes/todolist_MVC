<?php
require_once './app/controllers/TareasController.php';

class TareasView {
    
    function showTareas($tareas) {
        include './templates/header.php';
        include './templates/form.php';

        echo '<ul class="list-group">';
        foreach($tareas as $tarea) {
            if($tarea['completed'] == 1) {
                echo '<s><li class="list-group-item">'. $tarea['title'] . ': '. $tarea['description'] .'</li></s>
                <a href="eliminarTarea/'.$tarea['id'].'"><button type="button" class="btn btn-danger">Eliminar</button></a>';
            } else {
                echo '<li class="list-group-item">'. $tarea['title'] . ': ' . $tarea['description'] .'</li><a href="finalizarTarea/'.$tarea['id'].'"><button type="button" class="btn btn-success">Finalizar</button></a>
                <a href="eliminarTarea/'.$tarea['id'].'"><button type="button" class="btn btn-danger">Eliminar</button></a>';
            }
        }
        echo "</ul>";

        include './templates/footer.php';
    }
}
