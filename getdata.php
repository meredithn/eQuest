<?php
require "connection.php";
mysqli_set_charset($conn,'utf8'); 
$id = $_GET["id"];  
$query = "SELECT c.title, p.idpreguntas, p.pregunta, p.tipo, o.idopciones, o.opcion, r.idestudiante, p.num_resp  from cuestionarios c inner join preguntas p on c.id = p.id_cuestionario inner join opciones o on o.idpregunta = p.idpreguntas inner join respuestas r on r.idopcion = o.idopciones where c.id='$id' order by r.idrespuestas desc";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
    	echo $row["title"],'_', $row["idpreguntas"],'_',$row["pregunta"],'_',$row["tipo"],'_',$row["idopciones"],'_',$row["opcion"],'_',$row["idestudiante"],'_',$row["num_resp"],'*';
    }
	$query2 = "SELECT p.idpreguntas, p.pregunta, o.idopciones, o.opcion, p.num_resp  from preguntas p inner join opciones o on o.idpregunta = p.idpreguntas where p.id_cuestionario='$id'";
	$result2 = mysqli_query($conn, $query2);
	echo "__";
	if ($result2->num_rows > 0) {
	    // output data of each row
	    while($row = $result2->fetch_assoc()){
	    	echo $row["idpreguntas"],'_', $row["pregunta"],'_',$row["idopciones"],'_',$row["opcion"],'_',$row["num_resp"],'*';
	    }
		
	}
} else {			
    echo 0;
}
?>