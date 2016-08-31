<?php

require_once("model/materiaModel.php");
require_once("model/alumnoModel.php");
require_once("model/asistenciaModel.php");
require_once("view/asistenciaView.php");

class AsistenciaController {

    private $modelMateria;
    private $modelAlumno;
    private $modelAsistencia;
    private $view;


    function __construct(){
      $this->modelMateria = new MateriaModel();
      $this->modelAlumno = new AlumnoModel();
      $this->modelAsistencia = new AsistenciaModel();
      $this->view = new AsistenciaView();
    }

    public function showForm($idMateria){
      $materia = $this->modelMateria->getMateriaById($idMateria);
      $alumnos = $this->modelAlumno->getAlumnosByMateria($idMateria);
      $this->view->form($materia,$alumnos);
    }

    function altaAsistencia(){
      if(isset($_POST["materia"]) && isset($_POST["inputDate"])){
          $materia = $_POST["materia"];
          $fecha = $_POST["inputDate"];
          unset($_POST["materia"]);
          unset($_POST["inputDate"]);
          $asistencias = array();

          foreach ($_POST as $name => $value) {
              $input = explode("-",$name);
              $alumno = new stdClass;
              $alumno->id_materia = $materia;
              $alumno->fecha = $fecha;
              $alumno->id_alumno = $input[1];
              array_push($asistencias,$alumno);
          }
          $resultado = $this->modelAsistencia->guardarAsistencias($asistencias);
          echo $resultado;

      }

    }

}

 ?>
