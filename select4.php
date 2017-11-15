<?php 
session_start();
require "connection.php";
mysqli_set_charset($conn,'utf8');
$idc = $_GET["id"];
$idc = (explode("-", $idc));
$id = $idc[0];
$idc = $idc[1];
if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $output = '';  
 $sql = "SELECT * FROM estudiantes WHERE id_curso LIKE '$id' ORDER BY nombre";
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
      <form action="enviar.php?id='.$idc.'" method="post" class="formulario1">
        <div class="checkbox">
           <table class="table table-bordered">  
                <tr>  
                     <th width="40%">Nombre</th>  
                     <th width="40%">Correo</th> 
                     <th width="15%">Celular</th> 
                </tr>';  
 if(mysqli_num_rows($result) >= 0)  
 {  
   $i=1;
      while($row = mysqli_fetch_array($result))  
      {  
        $info = $row["correo"] . '*' . $row["idestudiante"] . '*' . $row["celular"] . '*' . $id;
           $output .= '  
                <tr>   
                
                    
                       <td class="first_name" ><input type="checkbox" name="cbg1[]" id='.$i.' value='.$info.' ><label for='.$i.'>'.$row["nombre"].'</label></td>
                       <td class="email">'.$row["correo"].'</td>   
                       <td class="last_name">'.$row["celular"].'</td> 
                     
                </tr> 
           '; 
           $i = $i+1; 
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
 $output .= '</table>
            </div> 
             <div class="formulario1">
               <div class="checkbox">
                  

                   <input type="checkbox" name="checkbox[]" id="rand" onchange="togglerandom(this)">
                   <label for="rand">Muestra Aleatoria</label> 
                   <input type="checkbox" name="checkbox[]" id="all" onchange="togglecheckboxes(this)">
                   <label for="all">Seleccionar Todo</label> 
                  
                 </div> 
             </div> 
              <right><input type="submit"></right>

              </form>  
             </div>';  
 echo $output;  
 ?>