<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones Usuarios</title>
</head>
<body>
    <center>
        <?
            session_start();
            $usuario = 'hola';

            if(isset($_POST[ "usuario" ]) || (!$_POST[ "usuario" ] == "" || !$_POST[ "usuario" ] = null)){

                $_SESSION[ "usuario" ] = $_POST[ "usuario" ];

            }

            if(isset($_SESSION[ "usuario" ]) || isset($_SESSION[ "contraseña" ])){
                $usuario = $_SESSION[ "usuario" ];
                $contraseña = $_SESSION[ "contraseña" ];
            }
        ?>
        <form action="recopilar_info" method="post">
            <table>
                <tr>
                    <td>Username: <input type="text" id="usuario" placeholder=<?php echo $usuario ?>></td>
                </tr>
                <tr>
                    <td>Password :  <input type="password" id="contraseña" value="$contraseña" ></td>
                </tr>
            </table>
        </form>
    </center>
    <fieldset >
        <legend>Elige una opcion</legend>
        <center>
            <form action="inicio_tabla.php" method="post">
                <input type="radio" name="option" id="alta">ALTA
                <input type="radio" name="option" id="baja">BAJA
                <input type="radio" name="option" id="cambiar_contraseña">CAMBIAR CONTRASEÑA
                <input type="radio" name="option" id="baja">BAJA
                <center><input type="submit" value="submit"></center>
            </form>
        </center>
    </fieldset>
    
</body>
</html>