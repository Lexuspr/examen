<?php require_once("header.php"); 
require_once("Datos/CiudadDatos.php");
require_once("Datos/PaisDatos.php");
require_once("funciones.php");
$xid_pais = leerParam("lista_pais","");
$xid_ciudad = leerParam("lista_ciudad","");
$objPaisD = new PaisDatos();
$objCiudadDatos = new CiudadDatos();
$ciudades = $objCiudadDatos->getCiudad($xid_ciudad);
$paises = $objPaisD->getPaisbyId($xid_pais);
//echo "$ciudades[1]";
?>
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Imprimir
                <small>Ciudades y Paises</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.php">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> 
                </li>

            
            </ol>
        </div>
    </div>
    <!-- /.row -->
	<label>País Seleccionado : <?php echo "$paises->nom_pais" ?></label>
	<p/>
	<label>Ciudad Seleccionada : <?php echo "$ciudades->nom_ciudad" ?></label>
				
				
				
</div>

<!-- /.container-fluid -->
<?php require_once("footer.php"); ?>