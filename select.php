<?php  
session_start();
$email = $_SESSION['email'];
require "connection.php";
mysqli_set_charset($conn,'utf8');

if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $output = '';  
 $sql = "SELECT * FROM cursos WHERE email = '".$email."' ORDER BY id_curso DESC";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">id</th>  
                     <th width="40%">Curso o conferencia</th>  
                     <th width="10%">Eliminar/Agregar</th>  
                </tr>';  
 if(mysqli_num_rows($result) >= 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  

                <tr>  
                     <td>'.$row["id_curso"].'</td>  
                     <input type="hidden" name="id_curso" value="'.$row["id_curso"].'">
                     <td><a href="curso.php?id='.$row["id_curso"].'">'.$row["Curso"].'</td> 
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id_curso"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="first_name" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>