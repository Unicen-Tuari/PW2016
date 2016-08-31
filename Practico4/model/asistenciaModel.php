<?php
	require_once('model/db.php');

	class AsistenciaModel extends DB{

		function __construct() {
			parent::__construct();
		}

		function guardarAsistencias($asistencias){
			try{
				$this->conn->beginTransaction();
				foreach ($asistencias as $asistencia) {
					$query = $this->conn->prepare("INSERT INTO asistencia(id_alumno,id_materia,fecha) VALUES(?,?,?)");
					$query->execute(array($asistencia->id_alumno,$asistencia->id_materia,$asistencia->fecha));
				}
				$this->conn->commit();
				return 1;
			}catch(Exception $ex){
				$this->conn->rollback();
				return 0;
			}

		}

	}
?>
