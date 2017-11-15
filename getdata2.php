<?php
require "connection.php";
mysqli_set_charset($conn,'utf8'); 
$idm = $_GET["id"];
$idn = (explode("-", $idm));
$id = $idn[0];
$idc = $idn[1];
$query = "SELECT r.idrespuestas  from cuestionarios c inner join preguntas p on c.id = p.id_cuestionario inner join opciones o on o.idpregunta = p.idpreguntas inner join respuestas r on r.idopcion = o.idopciones where c.id='$idc' order by r.idrespuestas desc";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    header('location: resultado.php?id='.$idc);
	
} else {			//$id_curso . '-' .$id_cuestionario;
    header('location: cuestionario3.php?id='.$idm);
}
?>