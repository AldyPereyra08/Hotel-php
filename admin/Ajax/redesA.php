<?php

require_once "../Controladores/inicioC.php";
require_once "../Modelos/inicioM.php";

class RedesA{

	public $Rid;

	public function EditarRedesA(){

		$item = "id";
		$valor = $this->Rid;

		$respuesta = InicioC::VerRedesC($item, $valor);

		echo json_encode($respuesta);

	}

}


if(isset($_POST["Rid"])){

	$redes = new RedesA();
	$redes -> Rid = $_POST["Rid"];
	$redes -> EditarRedesA();

}