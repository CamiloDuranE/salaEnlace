function registrar(){
    let dia = document.getElementById("dia").value
    let bloque = document.getElementById("bloque").value
    let valor = dia + bloque
    let asignatura = document.getElementById("asignatura").value
    let nivelCurso = document.getElementById("nivelCurso").value


    document.getElementById(valor).innerHTML = asignatura + "<br>" + nivelCurso + "º"
}