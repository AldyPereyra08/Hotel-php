<?php

require_once "ConexionBD.php";

//Ver HS
class HSimpleM extends ConexionBD{

    static public function VerHSimpleM($tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT id, imagen, estrellas, precio FROM $tablaBD");

        $pdo -> execute();

        return $pdo -> fetch();

        $pdo -> close();

        $pdo = null;

    }

    //Editar HS
	static public function EditarHSimpleM($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, precio, imagen, estrellas FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		$pdo -> execute();

		return $pdo->fetch();

		$pdo -> close();

        $pdo = null;
        
        $pdo = null;

    }
    
    //Actualizar HS
	static public function ActualizarHSimpleM($tablaBD, $datosC){

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