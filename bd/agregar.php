<?php

    include "./conexion.php";

    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $nota = $_GET["nota"];

    $agregar = mysqli_query($conn, "INSERT INTO alumnos(nombre, apellido, nota)
                            VALUES ('$nombre','$apellido','$nota')");

    header('Location: ../index.php');
?>