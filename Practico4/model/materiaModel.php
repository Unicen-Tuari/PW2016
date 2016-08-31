<?php
	require_once('model/db.php');

	class MateriaModel extends DB{

		function __construct() {
			parent::__construct();
		}

		function getMaterias(){
			$query = $this->conn->prepare("SELECT * FROM Materia");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		function getMateriaById($id){
			$query = $this->conn->prepare("SELECT * FROM Materia WHERE id = ?");
			$query->execute(array($id));
			return $query->fetch(PDO::FETCH_ASSOC);
		}

		function getMateriasByAlumno($idAlumno){
			 //INNER JOIN Alumno_Materia am ON(a.id = am.id_alumno) INNER JOIN Materia m ON(m.id = am.id_materia)
			 $query = $this->conn->prepare("SELECT id, nombre FROM Materia m INNER JOIN Alumno_Materia am ON(m.id = am.id_materia) WHERE am.id_alumno = ?");
			 $query->execute(array($idAlumno));
			 return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		function agregarMateria($materia){
			$this->db->agregarMateria($materia);
		}

	}
?>
