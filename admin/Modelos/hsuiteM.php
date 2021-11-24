<?php

require_once "ConexionBD.php";

class HSuiteM extends ConexionBD{

	static public function VerHSuiteM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, imagen, estrellas,precio FROM $tablaBD");

		$pdo -> execute();

		return $pdo->fetch();

		$pdo -> close();


	}

		//Editar HS
		static public function EditarHSuiteM($tablaBD, $id){

			$pdo = ConexionBD::cBD()->prepare("SELECT id, precio, imagen, estrellas FROM $tablaBD WHERE id = :id");
	
			$pdo -> bindParam(":id", $id, PDO::PARAM_INT);
	
			$pdo -> execute();
	
			return $pdo->fetch();
	
			$pdo -> close();
	
			$pdo = null;
	
		}


		//Actualizar HS
		static public function ActualizarHSuiteM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET precio = :precio, estrellas = :estrellas, imagen = :imagen WHERE id = :id");

		$pdo -> bindParam(":precio", $datosC["precio"], PDO::PARAM_STR);
		$pdo -> bindParam(":estrellas", $datosC["estrellas"], PDO::PARAM_STR);
		$pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);
		$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);

		if($pdo -> execute()){

			return true;

		}else{
			return false;
		}

		$pdo -> close();
		$pdo = null;

	}



}