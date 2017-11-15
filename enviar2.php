<?php 
$email = "meredith.n@hotmail.com"; // Email de la cuenta de cliente   
$pass = "3556236m"; // Clave de la cuenta de cliente   
$mobile = "3157656153"; // Móvil destino  
$idsender = "3002760424"; 
$prefix = "57"; // Prefijo del pais 
session_start();
require("archivosformulario/class.phpmailer.php"); // Requiere PHPMAILER para poder enviar el formulario desde el SMTP de google
$mail = new PHPMailer();
require "connection.php";
mysqli_set_charset($conn,'utf8');
$id = $_GET["id"];
$mail->Username = "equest.cc@gmail.com";  // Correo Electrónico
$mail->Password = "MaC201707112037066855"; // Contraseña del correo
$mail->SetFrom("equest.cc@gmail.com", "eQuest");

if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $sql = "SELECT * FROM estudiantes WHERE id_curso LIKE '$id' ORDER BY nombre";
 $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0){
  	while($row = mysqli_fetch_array($result)){
	  	$mail->AddAddress($row["correo"]);
		$mail->WordWrap = 50; 
	    $mail->IsHTML(true);  
	    $mail->Subject  = "Descarga eQuest en tu móvil"; // Asunto del mensaje.
	    $mail->Body     =  "Ingresa a este link para descargar eQuest en tu celular".
	    "https://drive.google.com/file/d/1sR0bwODEBOhlSyx7bZr95eeAGAKzVsKd/view?usp=sharing \n<br />";

	    $sms ="Ingresa ya al enlace para descargar eQuest \n https://drive.google.com/file/d/1sR0bwODEBOhlSyx7bZr95eeAGAKzVsKd/view?usp=sharing";
	    $url = "http://www.afilnet.com/http/sms/?email=".$email."&pass=".$pass."&mobile=".$row["celular"]."&id=".urlencode($idsender)."&country=".$prefix."&sms=".urlencode($sms); // URL de petición  
	    $response = file_get_contents($url);  
	    if($mail->Send()){  
	        if($response){
	            switch($response) {  
	                case "OK":  
	                    //echo "Envío exitoso"; 
	                    header('location: curso.php?id='.$id);  
	                    break;  
	                case "-1":   
	                    echo "Error en el login, usuario o clave incorrectas";  
	                    break;  
	                default:   
	                    echo "No dispone de créditos para realizar el envío";  
	            }  
	        }else {  
	            echo "Error en la petición";  
	        }
	        
	    }
	}

  }
?>  