<?php

require_once("model/alumnoModel.php");
require_once("model/materiaModel.php");
require_once("view/alumnoView.php");

class AlumnoController {

    private $model;
    private $modelMateria;
    private $view;

    function __construct(){
      $this->model = new AlumnoModel();
      $this->modelMateria = new MateriaModel();
      $this->view = new AlumnoView();
    }

    public function showAlumnos(){
      $alumnos = $this->model->getAlumnos();
      $salida = array();
      foreach($alumnos as $alumno){
        $alumno["Materias"] = $this->modelMateria->getMateriaByAlumno($alumno["id"]);
        array_push($salida,$alumno);
      }
      $this->view->mostrar($salida);
    }

}

 ?>
