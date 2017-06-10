<?php 

require_once("Modelos/Ciudad.php");
require_once("funciones.php");
class CiudadDatos{
	function getCiudadbyId($id){
		$ciudad[] = new Ciudad();		
		$xc = conectar();
		$sql = "SELECT * FROM ciudad where id_pais='$id'";
		$res = mysqli_query($xc,$sql);
		desconectar($xc);
		array_pop($ciudad);
		while($fila = mysqli_fetch_array($res)){
			$ciudadtmp = new Ciudad();
			$ciudadtmp->id_ciudad= $fila['id_ciudad'];
			$ciudadtmp->nom_ciudad= $fila['nom_ciudad'];
			$ciudadtmp->id_pais= $fila['id_pais'];
			array_push($ciudad,$ciudadtmp);
		}		
		return $ciudad;
	}
	
	function getCiudad($id){
		$ciudad = new Ciudad();
		$xc = conectar();
		$sql = "SELECT * FROM ciudad WHERE id_ciudad='$id'";
		$res = mysqli_query($xc,$sql);
		desconectar($xc);
		$fila = mysqli_fetch_array($res);
		$ciudad->id_ciudad = $fila['id_ciudad'];
		$ciudad->nom_ciudad = $fila['nom_ciudad'];
		$ciudad->id_pais = $fila['id_pais'];
		return $ciudad;
	}
}
 ?>