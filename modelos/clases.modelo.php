<?php

require_once "conexion.php";

class ModeloClases{

	/*=============================================
	MOSTRAR CLASES
	=============================================*/

	static public function MdlMostrarClases($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();

			return $stmt -> fetch();
		}else{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();

			return $stmt -> fetchAll();
		}
		$stmt -> close();
		$stmt = null;

	}
	/*=============================================
	REGISTRAR CLASES
	=============================================*/
	static public function mdlIngresarClases($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo_asignatura, nombre_clase, duracion, horario, nombre_docente) 
												VALUES (:codigo_asignatura, :nombre_clase, :duracion, :horario, :nombre_docente)");

		$stmt->bindParam(":codigo", $datos["codigo_asignatura"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre_clase"], PDO::PARAM_STR);
		$stmt->bindParam(":duracion", $datos["duracion"], PDO::PARAM_STR);
		$stmt->bindParam(":horario", $datos["horario"], PDO::PARAM_STR);
		$stmt->bindParam(":docente", $datos["nombre_docente"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}


}