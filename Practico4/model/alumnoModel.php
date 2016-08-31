<?php
	require_once('model/db.php');

	class AlumnoModel extends DB{

		function __construct() {
			parent::__construct();
		}

		function getAlumnos(){
			$query = $this->conn->prepare("SELECT * FROM Alumno a");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		function getAlumnosByMateria($materia){
			$query = $this->conn->prepare("SELECT * FROM Alumno a INNER JOIN Alumno_Materia am ON(a.id = am.id_alumno) WHERE am.id_materia = ?");
			$query->execute(array($materia));
			return $query->fetchAll(PDO::FETCH_ASSOC);
			//return $this->conn->getAlumnosByMateria($materia);
		}

		function agregarAlumno($alumno){
			$this->db->agregarAlumno($alumno);
		}

	}
?>
