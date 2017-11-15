<?php 

$id = $_GET['id'];
$db_host="gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com";
$db_user="admin";
$db_password="admin123";
$db_name="USERSDB";
$db_table_name="userinfo";

$conn = new mysqli("gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com", "admin", "admin123", "USERSDB"); // 

if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $output = '';  
 $sql = "SELECT nombre, correo, celular FROM estudiantes WHERE id_curso LIKE '$id' ORDER BY nombre";
 $result = mysqli_query($conn, $sql);  
 
 if(mysqli_num_rows($result) >0)  
 {   
      $output .= '    
      <div class="table-responsive">  
           <table class="table table-bordered">  
                    <tr>  
                         <th width="40%">Nombre</th>  
                         <th width="40%">Correo</th> 
                         <th width="15%">Celular</th> 
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
      $output .= ' </table> 

      ';  
 }  
 else  
 {  
      $output .= '        <script>window.location.hash = "subscribe";</script>
                          <center> Ingresa tu lista para iniciar</center>  
                     ';  
 }  
 $output .= '  
      </div>';  
 echo $output;  
 ?>