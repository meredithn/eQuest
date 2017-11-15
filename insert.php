<?php  

session_start();
$email = $_SESSION['email'];
require "connection.php";
mysqli_set_charset($conn,'utf8'); 
$title = $_POST["first_name"];
if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $sql = "INSERT INTO cursos(curso, email) VALUES('".$title."', '".$email."')";  
 if(mysqli_query($conn, $sql))  
 {  
      echo "Ingreso exitoso";  
 }  
 ?> 