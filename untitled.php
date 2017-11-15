<?php
require "connection.php";
mysqli_set_charset($conn,'utf8'); 
$id = $_GET["id"];  
$query = "SELECT p.idpreguntas, p.pregunta, o.idopciones, o.opcion, p.num_resp  from preguntas p inner join opciones o on o.idpregunta = p.idpreguntas where p.id_cuestionario='$id'";
$result = mysqli_query($conn, $query);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
    	echo $row["idpreguntas"],'_', $row["pregunta"],'_',$row["idopciones"],'_',$row["opcion"],'_',$row["num_resp"],'*';
    }
	
} else {			
    echo 0;
}
?>