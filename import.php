<?php

  include ("connection2.php");
  

    $file = $_FILES['file']['tmp_name'];
    $handle = fopen($file, "r");
    $c = 0;
     

    while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
    {
      $name = $filesop[0];
      $email = $filesop[1];
      $cel = $filesop[2];
      
      $sql = mysqli_query($conn2,"INSERT INTO estudiantes (id_estudiante, correo, celular) VALUES ('$name','$email','$cel')");
      $c = $c + 1;

    }

    
        
    
      if($sql){
        echo "Se han cargado correctamente los datos. ". $c ." Personas registradas";
      }else{
        echo "Uupps! al parecer hay un problema, verificar el archivo subido";
      }

?>