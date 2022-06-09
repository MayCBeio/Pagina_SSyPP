<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EliDeli Botanas</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javaScript" src="javascript.js"></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="home.php?c=productos&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="nom_area">Nombre de la area</label>
					<input type="text" class="form-control" id="nom_area" name="nombre_area" />
				</div>
				
				<div class="form-group">
					<label for="facultad">facultad</label>
					<input type="text" class="form-control" id="facultad" name="facultad" />
				</div>
				
				<div class="form-group">
					<label for="nom_carr">Nombre de la carrea</label>
					<input type="text" class="form-control" id="nom_carr" name="nom_carr" />
				</div>
				
				
				
				
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>