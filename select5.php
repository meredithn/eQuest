<?php  
require "connection.php";
mysqli_set_charset($conn,'utf8');
session_start();
$idp = $_SESSION['idp'];


if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $output = '';  //WHERE idpreguntas = '".$idp."'
 $sql = "SELECT * FROM preguntas ORDER BY idpreguntas DESC";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <center>   
      <form action="" method="post" class="formulario2">
      <div class="checkbox">';


 if(mysqli_num_rows($result) >= 0)
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <input type="checkbox" name="cmm[]" id='.$row["idpreguntas"].' value='.$row["idpreguntas"].' ><label for='.$row["idpreguntas"].'>'.$row["pregunta"].'</label>
 
           ';  
      }  
      $output .= '  
 
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= ' </div>
 </form>
      </center>';  
 echo $output;  
 ?>