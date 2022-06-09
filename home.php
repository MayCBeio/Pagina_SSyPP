<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
      
      
      <?php
	
	require_once "config/config.php";
	require_once "core/routes.php";
	require_once "config/base_d.php";
	require_once "controllers/carreras.php";
	require_once "controllers/users.php";
	require_once "controllers/contacto.php";
	
	if(isset($_GET['c'])){
		
		$controlador = cargarControlador($_GET['c']);
		
		if(isset($_GET['a'])){
			if(isset($_GET['id'])){
				cargarAccion($controlador, $_GET['a'], $_GET['id']);
				} else {
				cargarAccion($controlador, $_GET['a']);
			}
			} else {
			cargarAccion($controlador, ACCION_PRINCIPAL);
		}
		
		} else {
		
		$controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
		$accionTmp = ACCION_PRINCIPAL;
		$controlador->$accionTmp();
	}
?>
<a href="index.php" class="btn btn-primary">Regresar</a>

</html>
