<?php
require_once ("funciones.php");
//require_once("Datos/CiudadDatos.php");
require_once("Datos/PaisDatos.php");

function getListasPais(){
//$xid_pais = leerParam("xid_pais","");
$objPaisDatos = new PaisDatos();
//$objCiudadDatos = new CiudadDatos();
//$ciudad = $objCiudadDatos->getCiudadById($xid_pais);
$paises = $objPaisDatos->getPais();
	$listas = '<option value="0">Elige un pais...</option>';
	foreach($paises as $pais){
		$listas .= "<option value='$pais->id_pais'>$pais->nom_pais</option>";
	}
	return $listas;
}
echo getListasPais();
?>