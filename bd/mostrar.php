<?php

    $show = mysqli_query($conn, "SELECT * FROM alumnos ORDER BY nombre ASC");

        while ($alumno = mysqli_fetch_assoc($show)){
            echo "
                <tr>
                    <td>".$alumno['id']."</td>
                    <td>".$alumno['nombre']."</td>
                    <td>".$alumno['apellido']."</td>
                    <td>".$alumno['nota']."</td>
                </tr>";
        }
    
?>