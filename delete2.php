<?php  
$db_host="gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com";
$db_user="admin";
$db_password="admin123";
$db_name="USERSDB";
$db_table_name="userinfo";

$conn = new mysqli("gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com", "admin", "admin123", "USERSDB"); // 

if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
$sql = "DELETE FROM preguntas WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>