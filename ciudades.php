<?php 
require_once("header.php");
require_once("funciones.php");
$xc = conectar();
$sql = "SELECT * FROM ciudad";
$res = mysqli_query($xc,$sql);
desconectar($xc);

?>
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Ciudades
                <small>listado</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="ciudades_registrar.php">Nueva Ciudad</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Ciudad</th>                            
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       while ($fila = mysqli_fetch_array($res)) {
                        $xid_ciudad = $fila["id_ciudad"];
                        $xnom_ciudad = $fila["nom_ciudad"];
						$xid_pais = $fila["id_pais"];						
                            echo "<tr>";
                                echo "<td>$xid_ciudad</td>";
                                echo "<td>$xnom_ciudad</td>";
                               
                                echo "<td><a href='ciudades_editar.php?xid_ciudad=$xid_ciudad'>Editar </a> 
								<a href='alumnos_grabar.php?xid_ciudad=$xid_ciudad'> Eliminar </td>";
                            echo "</tr>";
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->
<?php require_once("footer.php"); ?>