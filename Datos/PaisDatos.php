<?php 

require_once("Modelos/Pais.php");
require_once("funciones.php");
class PaisDatos{
	function getPais(){
		$paises[] = new Pais();		
		$xc = conectar();
		$sql = "SELECT * FROM pais";
		$res = mysqli_query($xc,$sql);
		desconectar($xc);
		array_pop($paises);
		while($fila = mysqli_fetch_array($res)){
			$paistmp = new Pais();
			$paistmp->id_pais= $fila['id_pais'];
			$paistmp->nom_pais= $fila['nom_pais'];
			array_push($paises,$paistmp);
		}		
		return $paises;
	}
	function getPaisbyId($id){
		$pais = new Pais();
		$xc = conectar();
		$sql = "SELECT * FROM pais WHERE id_pais='$id'";
		$res = mysqli_query($xc,$sql);
		desconectar($xc);
		$fila = mysqli_fetch_array($res);
		$pais->id_pais = $fila['id_pais'];
		$pais->nom_pais = $fila['nom_pais'];
		return $pais;
	}
}
 ?>