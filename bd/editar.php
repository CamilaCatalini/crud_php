<?php
    include "./conexion.php";

    $id = $_GET["id"];
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $nota = $_GET["nota"];

    echo '$nombre';

    $editar = mysqli_query($conn, "UPDATE alumnos SET nombre='$nombre', apellido='$apellido', nota='$nota' WHERE id='$id'");

    header('Location: ../index.php');
?>