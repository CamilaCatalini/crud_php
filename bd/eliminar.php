<?php
    include "./conexion.php";

    $id = $_GET["id"];

    $eliminar = mysqli_query($conn, "DELETE FROM alumnos WHERE id='$id'");

    header('Location: ../index.php');

?>