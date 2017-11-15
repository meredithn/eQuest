<?php
require "connection.php";
mysqli_set_charset($conn,'utf8'); 
$id = $_GET["id"];  
$query = "SELECT c.title, p.idpreguntas, p.pregunta, p.tipo, o.idopciones, o.opcion, r.idestudiante   from cuestionarios c inner join preguntas p on c.id = p.id_cuestionario inner join opciones o on o.idpregunta = p.idpreguntas inner join respuestas r on r.idopcion = o.idopciones where c.id='$id' order by r.idrespuestas";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
    	echo $row["title"],' ', $row["idpregunta"],' ',$row["pregunta"],' ',$row["tipo"],' ',$row["idopcion"],' ',$row["opcion"],' ',$row["idestudiante"],'*';
    }
	
} else {			
    echo 0;
}
?>