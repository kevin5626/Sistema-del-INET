<?php
require_once("tutor.php");
require_once("tutorDAL.php");

require_once("curso.php");
require_once("cursoDAL.php");

require_once("alumno.php");
require_once("alumnoDAL.php");

require_once("telefono.php");
require_once("telefonoDAL.php");

$dalTutor = new TutorDal();
$dalCurso = new CursoDAL();
$dalAlumno = new AlumnoDal();
$dalTelefono = new TelefonoDAL();

$tutor = new Tutor(null, "Tu", "Papa");
$dalTutor -> insertTutor($tutor);

$tutoresArray = $dalTutor -> getTutores();
echo "Array: " .count($tutoresArray), "\n";

foreach($tutoresArray as $item) {
    echo $item -> getIdTutor(). " ". $item -> getNombre(). " ". $item -> getApellido() ."\n";
}

// $curso = new Curso(null, 2, 4, "2", "Programacion", "Vespertino", "Básico");
// $dalCurso -> insertCurso($curso);

// $cursosArray = $dalCurso -> getCursos();
// echo "Array: " .count($cursosArray), "\n";

// foreach($cursosArray as $item) {
//     echo $item -> getIdCurso(). " ". $item -> getAnio(). " " .$item -> getDivision(). " ". $item -> getComision() . " ". $item -> getEspecialidad() . " ". $item -> getTurno(). " ". $item -> getCiclo() ."\n";
// }

// $alumno = new Alumno("54678433", "Kevin", "Veron", $curso -> getIdCurso());
// $dalAlumno -> insertAlumno($alumno);

// $alumnosArray = $dalAlumno -> getAlumnos();
// echo "Array: " .count($alumnosArray), "\n";

// foreach($alumnosArray as $item) {
//     echo $item -> getDni(). " " .$item -> getNombre(). " ". $item -> getApellido(). " ". $item -> getIdCurso1() ."\n";
// }

$telefono = new Telefono(null, "Celular", 12, 11223344, $tutor -> getIdTutor());
$dalTelefono -> insertTelefono($telefono);

$telefonosArray = $dalTelefono -> getTelefonos();
echo "Array: " .count($telefonosArray), "\n";

foreach($telefonosArray as $item) {
    echo $item -> getIdTelefono(). " ". $item -> getTipoTelefono(). " ". $item -> getCodigoArea(). " ". $item -> getNumero(). " ". $item -> getIdTutor1() ."\n";
}
?>