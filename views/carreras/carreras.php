<!DOCTYPE html>
<html lang="es">
    <head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina de servicio social y practicas profesionales</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javaScript" src="javascript.js"></script>
    </head>
    <body>
        <a href="index.html"><img class="imagen" src="imagenes/logo_admin" width="150" height="135"></a>
        <h1 class="cabezera">Pagina de servicio social y practicas profesionales</h1>
        <ul class ="menu">
            
        <li><a href="index.php">Inicio</a> </li>
        <li><a href="home.php?c=contacto&a=index">Contacto</a> </li>
        <li><a href="home.php?c=users&a=index">Usuarios</a> </li>
           </ul>
		<div class="container">
			<h2><?php echo $data["carrera"]; ?></h2>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Nombre de la area </th>
							<th>Facultad</th>
							<th>Nombre de la carrera</th>
							
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["carreras"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["nom_area"]."</td>";
							echo "<td>".$dato["facultad"]."</td>";
							echo "<td>".$dato["nom_carr"]."</td>";
							echo "<td><a href=home.php?c=carreras&a=modificar&id=".$dato["id_carr"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='home.php?c=carreras&a=eliminar&id=".$dato["id_carr"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";

						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
		
	</body>
	<a href="home.php?c=users&a=nuevo" class="btn btn-primary">Agregar</a>
</html>