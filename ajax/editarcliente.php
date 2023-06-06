<?php

    include('../conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $clienteId = $_POST['cliente_id'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];


  $consulta = $conn->prepare('UPDATE clientes SET nombre = :nombre, apellido = :apellido WHERE id = :id');
  $consulta->bindParam(':nombre', $nombre);
  $consulta->bindParam(':apellido', $apellido);
  $consulta->bindParam(':id', $clienteId);

  if ($consulta->execute()) {
    echo 'OK';
  } else {
    echo 'ERROR';
  }
}

?>
