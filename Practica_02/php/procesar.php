<?php include './php/conect.php';
$action = $_GET['action'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $sql = "SELECT id_usuario, nombre_usuario, email, contraseña FROM usuarios WHERE correo_electronico='$correo' AND contraseña='$contrasena'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
      // Inicio de sesión exitoso
        session_start();
        $row = mysqli_fetch_assoc($result);
        $_SESSION["id_usuario"] = $row["id_usuario"];
        $_SESSION["nombre_usuario"] = $row["nombre_usuario"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["contraseña"] = $row["contraseña"];
        header("Location: index.php");
    } else {
      // Credenciales incorrectas
        $error = "El correo electrónico o la contraseña son incorrectos";
    }
}
if (isset($_SESSION['id_usuario'])) {
    // llevame a finanza
    header('Location: ./php/finanzas.php');
} else {
    // llevame a formulario 
    header('Location: /index.php');
    exit;
}

switch ($action) {
    case 'agregar_ingreso':
        $id = $_GET['id_persona'];
        $mes = $_POST['mesIngreso'];
        $importe = $_POST['importe'];
        $sql = "INSERT INTO ingresos (mes_ingreso, ingreso) VALUES ('$id','$mes','$importe')";
        if(mysqli_query($conn, $sql) === false ){
            echo "Los datos se agegareon correctamente";
        }else{
            echo "Error al introducir los datos: ".mysqli_error($conn);
        }
        header('location:./index.php');
        break;
    
    case 'agregar_perdida':
        $id = $_GET['id_persona'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $sql = "UPDATE persona SET nombre = '$nombre', apellido = '$apellido', edad = '$edad' WHERE id_persona = '$id'";
        if(mysqli_query($conn, $sql) === false ){
            echo "Los datos se agegareon correctamente";
        }else{
            echo "Error al introducir los datos: ".mysqli_error($conn);
        }
        header('location:./index.php');
        break;
}
?>
