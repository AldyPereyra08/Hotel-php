<?php

require_once "ConexionBD.php";

class SlideM extends ConexionBD{


	//Crear Slide

	static public function CrearSlideM($tableBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tableBD (titular, descripcion, orden, imagen) VALUES (:titular, :descripcion, :orden, :imagen)");

		$pdo -> bindParam(":titular", $datosC["titular"], PDO::PARAM_STR);
		$pdo -> bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);
		$pdo -> bindParam(":orden", $datosC["orden"], PDO::PARAM_STR);
		$pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);

		if($pdo -> execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();

	}


	//Ver Slide
	static public function VerSlideM($tableBD, $item, $valor){

		if($item != null){

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tableBD WHERE $item = :$item");

			$pdo -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$pdo -> execute();

			return $pdo -> fetch();

		}else{

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tableBD ORDER BY orden ASC");

			$pdo -> execute();

			return $pdo -> fetchAll();

		}

		$pdo -> close();

	}



	//Actualizar Slide
	static public function ActualizarSlideM($tableBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tableBD SET titular = :titular, descripcion 
			= :descripcion, orden = :orden, imagen = :imagen WHERE id = :id");

		$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
		$pdo -> bindParam(":titular", $datosC["titular"], PDO::PARAM_STR);
		$pdo -> bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);
		$pdo -> bindParam(":orden", $datosC["orden"], PDO::PARAM_STR);
		$pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);

		if($pdo -> execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();

	}


	//Borrar Slide
	static public function BorrarSlideM($tableBD, $id){

		$pdo = ConexionBD::cBD()->prepare("DELETE FROM $tableBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		if($pdo -> execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();

	}


}