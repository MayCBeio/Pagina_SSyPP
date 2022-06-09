<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio Social y Prácticas Profesionales</title>
   
    <link rel="stylesheet" href="styles_log.css">

    <a href="index.html"><img class="imagen" src="imagenes/logo_admi.png" width="150" height="135"></a>
    <h1 class="cabezera">Servicio Social y Prácticas Profesionales</h1>

    
</head>
<body>
    
       <div class="caja1">
<form method="post" action="log.php">
<div class="formtlo">Iniciar sesión</div>
<div class="ub1">&#128273; Ingresar usuario</div>
<input type="text" name="txtusuario">
<div class="ub1">&#128274; Ingresar password</div>

<input type="password" name="txtpassword" id="txtpassword">

<div class="ub1">
<input type="checkbox" onclick="verpassword()" >Mostrar contraseña
 </div>
<div class="ub1">Rol</div>
<select name="rol">
<option value="0" style="display:none;"><label>Seleccionar</label></option>
<option value="Usuario">Usuario</option>
<option value="Admin">Administrador</option>
</select>

<div align="center">
<input type="submit" value="Ingresar">

<input type="reset" value="Cancelar">
</div>
</form>
</div>
</body>
    <script>
  function verpassword(){
      var tipo = document.getElementById("txtpassword");
      if(tipo.type == "password")
	  {
          tipo.type = "text";
      }
	  else
	  {
          tipo.type = "password";
      }
  }
    </script>   

</body>

</html>