<?php 
session_start();
$id = $_GET['id'];
$_SESSION['id'] = $id;
require "connection.php";
mysqli_set_charset($conn,'utf8');

if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $output = '';  
 $sql = "SELECT nombre, correo, celular FROM estudiantes WHERE id_curso LIKE '$id' ORDER BY nombre";
 $result = mysqli_query($conn, $sql);  

     $output .= '  
          <div class="table-responsive">  
               <table class="table table-bordered">  
                    ';  
 if(mysqli_num_rows($result) > 0)  
 {  
           
     $output .= '  
          
                    <tr>  
                         <th width="40%">Nombre'.$id.'</th>  
                         <th width="40%">Correo</th> 
                         <th width="15%">wey</th> 
                    </tr>';
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>   
                     <td class="first_name" >'.$row["nombre"].'</td>
                     <td class="email">'.$row["correo"].'</td>   
                     <td class="last_name">'.$row["celular"].'</td>  
                      
                </tr>  
           ';  
      }  
      $output .= '  

      ';  
 }  
 else  
 {  
      $output .= '  
          <div class="table-responsive">  
               <table class="table table-bordered">
               <tr>  
                          <td colspan="4">Registra a tu grupo para poder visualizarlo.</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>