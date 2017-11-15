<?php  
require "connection.php";
mysqli_set_charset($conn,'utf8');
session_start(); 

if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $sql = "INSERT INTO preguntas(pregunta, tipo_resp, num_resp) VALUES('".$_POST["pregunta"]."', '".$_POST["first_name"]."', '".$_POST["last_name"]."')";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?> 