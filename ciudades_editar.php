<?php require_once("header.php"); 
require_once("funciones.php");
$xid_ciudad = leerParam("xid_ciudad","");
$sql = "SELECT * FROM ciudad WHERE id_ciudad = '$xid_ciudad'";
$xc = conectar();
$res = mysqli_query($xc,$sql);
desconectar($xc);
$fila = mysqli_fetch_array($res);
?>
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Ciudades
                <small>Editar</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form role="form" method="POST" action="ciudades_grabar.php">
                <input hidden="YES" name="accion" value="editar">
                <input hidden="YES" name="id_ciudad" value=<?php echo $xid_ciudad; ?>>
                <fieldset class="form-group">
                    <label for="nom_ciudad">Nombre:</label>
                    <input class="form-control" placeholder="Escriba la ciudad:" required="required" name="nom_ciudad" value=<?php echo $fila['nom_ciudad']; ?> id="nom_ciudad">
                </fieldset>                
				<fieldset class="form-group">
                    <label for="nom_pais">Pais:</label>
                    <select class="form-control" name="id_pais">
                        <?php
                                while($fila=mysqli_fetch_array($res)){
                                    $xid_pais = $fila["id_pais"];
                                    $xnom_pais = $fila["nom_pais"];
                                    echo "<option value='$xid_pais'>$xnom_pais</option>";
                                } 
                             ?>
                        </select>
                </fieldset>
                <button type="submit" class="btn btn-secondary">Guardar</button>
                
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
<?php require_once("footer.php"); ?>