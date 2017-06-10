<?php require_once("header.php");
require_once("funciones.php");

$xaccion=leerParam("accion","");

if ($xaccion=="crear") {
    
    $xnom_ciudad=leerParam("nom_ciudad","");    
    $xid_pais=leerParam("id_pais","");
    $xc = conectar();
    $sql = "INSERT INTO ciudad (nom_ciudad,id_pais) VALUES ('$xnom_ciudad','$xid_pais')";
    // echo "CONSULTA -> $sql";
    // die();
    mysqli_query($xc,$sql);
    desconectar($xc);
}elseif ($xaccion=="editar") {
	$xid_ciudad=leerParam("id_ciudad","");
    $xnom_ciudad=leerParam("nom_ciudad","");    
    $xid_pais=leerParam("id_pais","");
    $xc = conectar();
    $sql = "UPDATE ciudad SET nom_ciudad='$xnom_ciudad', id_pais='$xid_pais' WHERE id_ciudad='$xid_ciudad'";
    // echo "CONSULTA -> $sql";
    // die();
    mysqli_query($xc,$sql);
    desconectar($xc);
}elseif ($xaccion=="") {//significa que estamos eliminadno el registro
    $xid_ciudad= leerParam("xid_ciudad","");
    $xc = conectar();
    $sql = "DELETE FROM ciudad WHERE id_ciudad='$xid_ciudad'";
    
    mysqli_query($xc,$sql);
    desconectar($xc);
}

?>
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Ciudades
                <?php 
                    if($xaccion == "crear"){
                        echo"<small>Registro Creado Correctamente</small>";
                    }
                    if($xaccion == "editar"){
                        echo"<small>Registro Editado Correctamente</small>";
                    }
                    if($xaccion == ""){
                        echo"<small>Registro Eliminado Correctamente</small>";
                    }
                ?>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="ciudades.php">Ver Ciudades</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
<?php require_once("footer.php"); ?>