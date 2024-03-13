<?php
require "conexion.php";
;


// Recibe los datos del formulario
$nombre_taller = $_POST["nombre_taller"];
$instructor = $_POST["instructor"];
$dia_taller = $_POST["dia_taller"];
$hora_inicio = $_POST["hora_inicio"];
$aula = $_POST["aula"];


//insertar datos en la tabla talleres
$insertar_talleres = "INSERT INTO talleres (nombre_taller, instructor) 
                      VALUES ('$nombre_taller', '$instructor')";

//insertar datos en la tabla detalles_talleres
$insertar_detalle_talleres = "INSERT INTO detalles_talleres (Dia, Hora, Aula) 
        VALUES ('$dia_taller', '$hora_inicio',  '$aula')";



// Ejecutar las consultas
$query_detalle_talleres = mysqli_query($conectar, $insertar_detalle_talleres);
$query_talleres = mysqli_query($conectar, $insertar_talleres);

// Verificar si las consultas fueron exitosas
if ($query_detalle_talleres && $query_talleres) {
    echo '<script>
            alert("Se guardaron los datos correctamente");
            location.href = "registro.php";
          </script>';
} else {
    echo "Error al guardar los datos: " . mysqli_error($conectar);
}

// // Cerrar la conexión
 mysqli_close($conectar);
 ?>
