<?php

require_once "admin/Modelos/ConexionBD.php";

class HTripleM extends ConexionBD{

	static public function VerHTripleM($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, precio, estrellas FROM $tablaBD");

		$pdo->execute();

		return $pdo -> fetch();

		$pdo -> close();

		$pdo = null;

	}

}