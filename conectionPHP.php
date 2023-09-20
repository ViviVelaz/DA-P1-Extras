<?php
  $server = "localhost";
  $user = "viviana";
  $password = "123";
  $database = "formularioDB";

  // Crear conexión
  $conn = new mysqli($server, $user, $password, $database);

  // Verificar conexión
  if ($conn->connect_error) {
    die("Conexión Fallida: " . $conn->connect_error);
  }

  // Recoger los datos del formulario
  $apellidoPaterno = $_POST['apellidoP'];
  $apellidoMaterno = $_POST['apellidoM'];
  $nombres = $_POST['nombres'];
  $sexo = $_POST['sexo'];
  $email = $_POST['correo'];
  $fechaNac = $_POST['fechaNac'];
  $domicilio = $_POST['domi'];

  $sql = "INSERT INTO DatosPersonales (apellidoPaterno, apellidoMaterno, nombres, sexo, email, fechaNac, domicilio)
  VALUES ('$apellidoPaterno', '$apellidoMaterno', '$nombres', '$sexo', '$email', '$fechaNac', '$domicilio')";

  if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
