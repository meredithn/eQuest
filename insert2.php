<?php  
require "connection.php";
mysqli_set_charset($conn,'utf8');

if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $sql = "INSERT INTO preguntas(pregunta) VALUES('".$_POST["first_name"]."')";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 