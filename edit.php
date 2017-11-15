<?php  
$db_host="gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com";
$db_user="admin";
$db_password="admin123";
$db_name="USERSDB";
$db_table_name="userinfo";

$conn = new mysqli("gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com", "admin", "admin123", "USERSDB");
if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} // 
$id = $_REQUEST["id_curso"];
 $sql = "SELECT * FROM estudiantes WHERE id='$id'ORDER BY nombre";
 $result = mysqli_query($conn, $sql);  
 if(mysqli_num_rows($result) >= 0)  
 {  
 	header('location: curso.php');
 }  
 else{
 	header('location: curso.php');
 }
 ?>

