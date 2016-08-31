<?php
	session_start();
	//
	//	Atención!!!
	//
	//	Esto NO es una base de datos real.
	//	Su unico proposito es que puedan hacer el practico 4.
	//

	class DB {

		protected $conn;

		function __construct() {
			$this->conn = new PDO('mysql:host=localhost;'
				.'dbname=asistencias;charset=utf8'
				, 'root', '');
		}


/*
		function getMaterias()
		{
			return $_SESSION["materias"];
		}

		function getAlumnos()
		{
			return $_SESSION["alumnos"];
		}

		function getAlumnosByMateria($materia)
		{
			$alumnos = array();
			foreach($_SESSION["alumnos"] as $alumno)
			{
				$materiasAlumno= array_map(
				create_function('$o', 'return $o["id"];'), $alumno["Materias"]);
				if(in_array($materia, $materiasAlumno))
					array_push($alumnos, $alumno);
			}
			return $alumnos;
		}

		function getMateriaById($idMateria){
			foreach($_SESSION["materias"] as $materia)
			{
				if($materia["id"] == $idMateria)
					return $materia;
			}
		}

		function agregarMateria($materia)
		{
			array_push($_SESSION["materias"], $materia);
			return ;
		}

		function agregarAlumno($alumno)
		{
			array_push($_SESSION["alumnos"], $alumno);
		}
*/
	}
?>
