<?php require_once("header.php"); 
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
                <small>Añadir</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form role="form" method="POST" action="paises_grabar.php">
                <input hidden="YES" name="accion" value="crear">
                <fieldset class="form-group">
                    <label for="nom_pais">Nombre:</label>
                    <input class="form-control" placeholder="Escriba el pais" required="required" name="nom_pais" id="nom_pais">
                </fieldset>             
                
                <button type="submit" class="btn btn-secondary">Guardar</button>
                <button type="reset" class="btn btn-secondary">Borrar</button>
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
<?php require_once("footer.php"); ?>