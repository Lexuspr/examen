<?php
require_once ("funciones.php");
require_once("Datos/CiudadDatos.php");
require_once("Datos/PaisDatos.php");

function getListasCiudad(){
$xid_pais = leerParam("id","");
//$objPaisDatos = new PaisDatos();
$objCiudadDatos = new CiudadDatos();
$ciudades = $objCiudadDatos->getCiudadById($xid_pais);
//$paises = $objPaisDatos->getPais();
	$listas_ciudad = '<option value="0">Elige una ciudad...</option>';
	foreach($ciudades as $ciudad){
		$listas_ciudad .= "<option value='$ciudad->id_ciudad'>$ciudad->nom_ciudad</option>";
	}
	return $listas_ciudad;
}
echo getListasCiudad();
?>