<?php 
require "connection.php";
mysqli_set_charset($conn,'utf8');
session_start();
$id = $_GET["id"]; 
if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 
 $sql = "SELECT * FROM cuestionarios WHERE id_curso LIKE '$id' ORDER BY id DESC";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <center>  
                 <div class="formulario1">
';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
        $idd = $id . '-' .$row["id"];
           $output .= '  

                    <br> <a class="first_name" data-id1="'.$row["id"].'" class="btn" href="getdata2.php?id='.$idd.'"> '.$row["title"].'</a></br>
           ';  
      }  
    $output .= '
                    <br></br> 
                  </div>


               </center>';  
 }  
 else  
 {  
      $output .= '   
                          <p>¡Crea tu primer cuestionario a solo un click!:
                          Puedes añadir y editar tus cuestionarios para gestionarlos y enviarlos en el momento que desees.</p> 
                          </center>
                     ';  
 }  

 echo $output;  
 ?>