<?php  
require "connection.php";
mysqli_set_charset($conn,'utf8');
$respuesta = $_REQUEST["respuesta"];
$idpregunta = $_REQUEST["idpregunta"];

if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $sql = "INSERT INTO respuestas(respuesta, idpregunta) VALUES('".$respuesta."', '".$idpregunta."')";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Inserted';  
 } 

 ?> 
