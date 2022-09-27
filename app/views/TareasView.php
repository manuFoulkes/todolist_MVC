<?php

    include_once '../controller/TareasController.php';
    include_once '../model/TareasModel.php'; 

    class TareasView 
    {

        function __construct() {
            
        }

        function Mostrar($Tareas) {
        ?>
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Lista de Tareas</title>
                </head>
                <body>
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <h4 class="navbar-brand">TUDAI - Lista de Tareas</h4>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                    <div class="conteiner">
                        <h4>Tareas</h4>
                        <ul class="list-group text-center col-md-8">  
                          <!--  listarTareas(); -->
                        </ul>
                        <form action="agregarTarea" method="POST">
                            <div class="mb-3">
                                <label for="tile" class="form-label">Agregar tarea</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Nombre de la tarea">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Descripción</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </body>
                </html>

    <?php            
        }

    }
?>


?>