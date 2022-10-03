<?php
require_once './app/controllers/TareasController.php';
require_once './libs/Smarty.class.php';

class TareasView {


    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showTareas($tareas){
        $this->smarty->assign("tareas", $tareas);
        $this->smarty->display('tareasLista.tpl');
    }

    
   
}
