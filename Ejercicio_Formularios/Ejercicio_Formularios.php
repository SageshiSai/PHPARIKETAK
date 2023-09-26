<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Formularios</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Datos personales (Formulario)</h1>
    <fieldset>
        <legend>Formulario (Kevin)</legend>
        <p>Escriba los siguientes datos:</p>
        <div class="form-row">
        <div class="form-group">
            <label for="nombre">Nombre:</label> <br>
            <input type="text" id="nombre" placeholder="nombre">
        </div>
        
        <div class="form-group">
            <label for="apellido">Apellido:  </label> <br> 
            <input type="text" id="apellido" placeholder="Apellidoz">
        </div>
        
        <div class="form-group">
            <label for="fechaNacimiento"> Edad:</label> <br> 
            <input type="date" id="fechaNacimiento">
        </div>
    </div>
    <div>
        
    </div>
    </fieldset>
</body>

</html>