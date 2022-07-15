<?php include "bd/conexion.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="tabla">
        <p>ALUMNOS</p>

        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nota</th>
            </tr>
            <?php include "bd/mostrar.php" ?>
        </table>
    </div>

    <div>
        <p>AGREGAR ALUMNO</p>
        <div>
            <form action="bd/agregar.php">
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre" value=""><br>
                <label for="apellido">Apellido: </label>
                <input type="text" id="apellido" name="apellido" value=""><br>
                <label for="nota">Nota: </label>
                <input type="text" id="nota" name="nota" value=""><br>
                <input type="submit" value="Agregar">
            </form>
        </div>
    </div>

    <div>
        <p>MODIFICAR</p>
        <div>
            <form action="bd/editar.php">
                <label for="id">Id: </label>
                <input type="text" id="id" name="id" value=""><br>
                
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre" value=""><br>
                
                <label for="apellido">Apellido: </label>
                <input type="text" id="apellido" name="apellido" value=""><br>
                
                <label for="nota">Nota: </label>
                <input type="text" id="nota" name="nota" value=""><br>
                
                <input type="submit" value="Editar">
            </form>
        </div>
    </div>

    <div>
        <p>ELIMINAR</p>

        <div>
            <form action="bd/eliminar.php">
                <label for="id">Id: </label>
                <input type="text" id="id" name="id" value=""><br>
                
                <input type="submit" value="Eliminar">
            </form>
        </div>
    </div>
</body>
</html>