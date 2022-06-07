<?php
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Escolar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_calendar.css">
    <script type="text/javascript" src="./Js/index.js"></script>
</head>
<body>

    <ul>
        <li><a href="#" class="active">Inicio</a></li>
        <li><a href="#" class="right">Inicio de Sesión</a></li>
    </ul>
   

    <div class="Contenedor">
        <div class="Insert">
            <form action="php/ingresarPeticion.php"  method="POST">
                <h2>Dia</h2>
                <select class="dia" id="dia" name="dia">
                    <option value="0">Seleccione dia</option>
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miercoles">Miercoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                </select>
                
                <h2>Bloque</h2>
                <select class="bloque" id="bloque" name="bloque">
                    <option value="0">Seleccione bloque</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                
                <h2>Asignatura</h2>
                <select class="asignatura" id="asignatura" name="asignatura">
                    <option value="0">Seleccione asignatura</option>
                    <?php
                    $sql = "SELECT * FROM asignatura";
                
                    $query = $conexion -> query ($sql);
                
                    while($opciones = mysqli_fetch_array($query)){
                        echo "<option value='".$opciones['nombreAsignatura']."'>".$opciones['nombreAsignatura']."</option>";
                    }
                    ?>                   
                </select>
                
                <h2>Curso</h2>
                <select class="nivelCurso" id="nivelCurso" name="nivelCurso">
                    <option value="0">Seleccione nivel del curso</option>
                    <?php
                    $sql = "SELECT * FROM nivelcurso";
                
                    $query = $conexion -> query ($sql);
                
                    while($opciones = mysqli_fetch_array($query)){
                        echo "<option value='".$opciones['nombreNivelCurso']."'>".$opciones['nombreNivelCurso']."</option>";
                    }
                    ?>                   
                </select>
                <br><br>
                
                <button onclick="registrar()">Enviar</button>
            <form>
        </div> 
           
        <div class="Horario">
            <table class="Table">
                <caption>Calendario Enlances</caption>
                <tr>
                    <td  class="tdBloque0">
                    </td>
                    <th class="thDay">
                        Lunes
                    </th>
                    <th class="thDay">
                        Martes
                    </th>
                    <th class="thDay">
                        Miercoles
                    </th>
                    <th class="thDay">
                        Jueves
                    </th>
                    <th class="thDay">
                        Viernes
                    </th>
                </tr>
                <?php for ($y=1; $y <= 5 ; $y++) { ?>
                <tr>
                    <th class="thBloque">
                        <?php echo $y ?>
                    </th>
                    <?php for ($x=1; $x <= 5 ; $x++) { ?>
                        <td class="<?php echo "$x$y" ?>" id="<?php echo "$x$y" ?>">
                        </td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </table>
        </div>        
    </div>






</body>
</html>