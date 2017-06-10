<?php 
require_once("header.php");
require_once("funciones.php");
$xc = conectar();
$sql = "SELECT * FROM pais";
$res = mysqli_query($xc,$sql);
desconectar($xc);

?>
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Paises
                <small>listado</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="paises_registrar.php">Nuevo Pais</a>
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
                            <th>Pais</th>                            
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       while ($fila = mysqli_fetch_array($res)) {
                        $xid_pais = $fila["id_pais"];
                        $xnom_pais = $fila["nom_pais"];                        
                            echo "<tr>";
                                echo "<td>$xid_pais</td>";
                                echo "<td>$xnom_pais</td>";                                
                                echo "<td><a href='paises_editar.php?xid_pais=$xid_pais'> Editar </a> 
								<a href='paises_grabar.php?xid_pais=$xid_pais'>Eliminar</a></td>";
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