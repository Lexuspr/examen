<?php require_once("header.php");
require_once("funciones.php");

$xaccion=leerParam("accion","");

if ($xaccion=="crear") {
    
    $xnom_pais=leerParam("nom_pais","");   
    $xc = conectar();
    $sql = "INSERT INTO pais (nom_pais) VALUES ('$xnom_pais')";
    // echo "CONSULTA -> $sql";
    // die();
    mysqli_query($xc,$sql);
    desconectar($xc);
}elseif ($xaccion=="editar") {
	$xid_pais=leerParam("id_pais","");
    $xnom_pais=leerParam("nom_pais","");    
    
    $xc = conectar();
    $sql = "UPDATE pais SET nom_pais='$xnom_pais' WHERE id_pais='$xid_pais'";
    // echo "CONSULTA -> $sql";
    // die();
    mysqli_query($xc,$sql);
    desconectar($xc);
}elseif ($xaccion=="") {//significa que estamos eliminadno el registro
    $xid_pais= leerParam("xid_pais","");
    $xc = conectar();
    $sql = "DELETE FROM pais WHERE id_pais='$xid_pais'";
    
    mysqli_query($xc,$sql);
    desconectar($xc);
}

?>
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Paises
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
                    <i class="fa fa-dashboard"></i>  <a href="paises.php">Ver Paises</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
<?php require_once("footer.php"); ?>