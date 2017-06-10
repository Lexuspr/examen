<?php require_once("header.php"); 
require_once("funciones.php");
$xid_pais = leerParam("xid_pais","");
$sql = "SELECT * FROM pais WHERE id_pais = '$xid_pais'";
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
                Paises
                <small>Editar</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form role="form" method="POST" action="paises_grabar.php">
                <input hidden="YES" name="accion" value="editar">
                <input hidden="YES" name="id_pais" value=<?php echo $xid_pais; ?>>
                <fieldset class="form-group">
                    <label for="nom_pais">Pais:</label>
                    <input class="form-control" placeholder="Escriba el pais:" required="required" name="nom_pais" value=<?php echo $fila['nom_pais']; ?> id="nom_pais">
                </fieldset>           
                <button type="submit" class="btn btn-secondary">Guardar</button>
                
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
<?php require_once("footer.php"); ?>