<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: login.php');
	}
	require_once './../models/plan.entidad.php';
	require_once './../models/plan.model.php';


	// Logica
	$alm = new Plan();
	$model = new planModel();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tu cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<script type="text/javascript" src="./../js/DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
        <link rel="stylesheet" type="text/css" href="./../js/DataTables/datatables.css">
        <script type="text/javascript" src="./../js//DataTables/datatables.js"></script>
</head>
<body>
	<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO A TU CUENTA </h1>
	</div>
	<div class="w3-container w3-black w3-center">
		<h2><?php echo $_SESSION['usuario'];?> </h2>
	</div>
	<p></p>

	
	<div id="verPlanes">
            <table id="table1">
                <thead>
                    <tr>
                        <th style="text-align:center;">SERVICIO</th>
                        <th style="text-align:center;">INCIO</th>
                        <th style="text-align:center;">FIN</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($model->ListarxUsuario($_SESSION['idusuario']) as $r): ?>
                        <tr>
                            <td style="text-align:right;"><?php echo $r->__GET('oferta'); ?></td>
                            <td style="text-align:right;"><?php echo $r->__GET('inicio'); ?></td>
                            <td style="text-align:right;"><?php echo $r->__GET('fin'); ?></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>   
        </div>


	<form class="w3-container" action="./../controllers/controller_logout.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>
	</form>
	<a href="index.php">
		<button class="w3-btn w3-green">Home</button>
	</a>
</body>
<script>
$(document).ready(function() {
            var table=$('#table1').DataTable({
            dom: "Bflrtip",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]

            });
            // table.buttons( 1, 'csv:name' ).enable();
        });
</script>
</html>
