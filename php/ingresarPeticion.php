<?php

include 'conexion.php';


$dia=$_POST['dia'];
$bloque=$_POST['bloque'];
$asignatura=$_POST['asignatura'];
$nivelCurso=$_POST['nivelCurso'];

$instruccion_SQL = "INSERT INTO guardado(dia,bloque,asignatura,nivelCurso) VALUES ('$dia','$bloque','$asignatura','$nivelCurso')";
$resultado = mysqli_query($conexion, $instruccion_SQL);

if(!$resultado){
    echo "NO se pudo";
} 
    echo "Si se pudo";

?>