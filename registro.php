<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Talleres</title>
</head>
<body>

  <header class="header">

  </header>

  <h1>Registro de Talleres Sisi 2024</h1>
      
    <div  id="formulario" class= "formulario" >
      
      
      <form  class="form" action="guardar.php" method="post">
       
       <div class="seccion1">
        <label for="nombre_taller">Nombre del Taller:</label>
        <input type="text" id="nombre_taller" name="nombre_taller" required>

        <label for="instructor">Instructor:</label>
        
        <select id="instructor" name="instructor" required>
          <option value="">Seleccione</option>
          <option value="profesor1">Profesor 1</option>
          <option value="profesor2">Profesor 2</option>
          <option value="profesor3">Profesor 3</option>
        </select>

        <label for="dia_taller">Día del Taller:</label>
        
        <select id="dia_taller" name="dia_taller" required>
          <option value="">Seleccione</option>
          <option value="lunes">Lunes</option>
          <option value="martes">Martes</option>
          <option value="miercoles">Miércoles</option>
          <option value="jueves">Jueves</option>
          <option value="viernes">Viernes</option>
        </select>
        </div>
       
        <div class="seccion2">
        <label for="hora_inicio">Hora de Inicio:</label>
        <select id="hora_inicio" name="hora_inicio" required>
          <option value="">Seleccione</option>
          
          <?php
            for ($i = 7; $i <= 19; $i++) {
              printf('<option value="%02d:00">%02d:00 hr</option>', $i, $i);
            }
          ?>
        </select>

      
        <label for="hora_inicio">Hora de Finalizacion:</label>
        <select id="hora_inicio" name="hora_inicio" required>
          <option value="">Seleccione</option>
          <?php
             for ($i = 7; $i <= 19; $i++) {
              printf('<option value="%02d:00">%02d:00 hr</option>', $i, $i);
             }
          ?>
        </select>

        <label for="aula">Aula:</label>
        <select id="aula" name="aula" required>
          <option value="">Seleccione</option>
          <option value="G1">G1</option>
          <option value="G2">G2</option>
          <option value="G3">G3</option>
          <option value="G4">G4</option>
          <option value="G5">G5</option>
          <option value="G6">G6</option>
          <option value="G7">G7</option>
          <option value="G8">G8</option>
          <option value="G9">G9</option>
          <option value="H1">H1</option>
          <option value="H2">H2</option>
          <option value="H3">H3</option>
          <option value="H4">H4</option>
          <option value="H5">H5</option>
          <option value="H6">H6</option>
          <option value="H7">H7</option>
          <option value="H8">H8</option>
          <option value="H9">H9</option>
        </select>

        </div>
       
        <div class="seccion3">
                <button class ="btn registrar" type="submit" value="Enviar">Registrar</button>
                <button class ="btn eliminar" type="reset">Borrar datos</button>
        </div>

      </form>
    </div>
    </body>
    </html>


