<?php require_once("header.php"); 
require_once("funciones.php");
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
                    <i class="fa fa-file"></i> Tecsup
                </li>

            
            </ol>
        </div>
    </div>
    <!-- /.row -->
	<div class="row">
        <div class="col-lg-6">
            <form role="form" method="POST" action="imprimir.php">					
				<fieldset class="form-group" >
                        					
                        <select class="form-control" name="lista_pais" id="lista_pais">
                            
							
                        </select>
						
                </fieldset>
				
				<fieldset class="form-group" >
                        					
                        <select class="form-control" name="lista_ciudad" id="lista_ciudad">
                            
							
                        </select>
						
                </fieldset>				
				<button  type="submit" class="btn btn-secondary">Imprimir</button>
			</form>
		</div>
	</div>
				
				
				
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<script type="text/javascript" src="js/index.js"></script>
<!-- /.container-fluid -->
<?php require_once("footer.php"); ?>