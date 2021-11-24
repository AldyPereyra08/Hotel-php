<?php

require_once "admin/Modelos/ConexionBD.php";

class HSuiteM extends ConexionBD{

	static public function VerHSuiteM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, precio, estrellas FROM $tablaBD");

		$pdo->execute();

		return $pdo -> fetch();

		$pdo -> close();

		$pdo = null;

	}

}