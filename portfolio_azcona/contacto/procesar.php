<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios"; // Cambia este nombre a tu base de datos

// Crear conexión
$conn = new mysqli('localhost', 'root', '', 'usuarios');

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['fname'];
    $apellido = $_POST['lname'];
    $sexo = $_POST['sexo'];
    $email = $_POST['mail'];
    $descripcion = $_POST['desc'];

   
    $sql = "INSERT INTO contactos (nombre, apellido, email, descripcion) VALUES (?, ?, ?, ?, ?)";

    // Preparar la sentencia
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $apellido, $email, $descripcion);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Datos guardados exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
