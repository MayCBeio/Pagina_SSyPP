<?php
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carreras</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javaScript" src="javascript.js"></script>
	</head>
	<body>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="#" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="nom_area">Nombre de la area</label>
					<input type="text" class="form-control" id="nom_area" name="nom_area" value="<?php echo $data["carreras"]["nom_area"]?>" />
				</div>
				
				<div class="form-group">
					<label for="facultad">Facultad</label>
					<input type="text" class="form-control" id="facultad" name="facultad" value="<?php echo $data["facultad"]["facultad"]?>" />
				</div>
				<div class="form-group">
					<label for="nom_carr">Nombre de la carreara </label>
					<input type="text" class="form-control" id="nom_carr" name="nom_carr" value="<?php echo $data["carreras"]["nom_carr"]?>" />
					
					
				</div>
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>		