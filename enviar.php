<?php
$email = "meredith.n@hotmail.com"; // Email de la cuenta de cliente   
$pass = "3556236m"; // Clave de la cuenta de cliente   
$mobile = "3157656153"; // Móvil destino  
$idsender = "3002760424"; 
$prefix = "57"; // Prefijo del pais   
session_start();
require("archivosformulario/class.phpmailer.php"); // Requiere PHPMAILER para poder enviar el formulario desde el SMTP de google
$mail = new PHPMailer();
$mail->IsSMTP(); 
$mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida. 465 es uno de los puertos que usa Google para su servidor SMTP
$mail->SMTPAuth = true; 
$mail->Username = "equest.cc@gmail.com";  // Correo Electrónico
$mail->Password = "MaC201707112037066855"; // Contraseña del correo
$mail->SetFrom("eQuest.cc@gmail.com", "eQuest");
$id = $_GET["id"];
if(!empty($_POST['cbg1'])){
// Loop to store and display values of individual checked checkbox.
    $idestudiantes = $_POST['cbg2'];
foreach($_POST['cbg1'] as $selected){
    $info = explode("*",$selected);
    $correo = $info[0];
    $ide = $info[1];
    $celular = $info[2];
    $curso = $info[3];
    $code = $id . '-' . $ide;
	$mail->AddAddress($correo);
	$mail->WordWrap = 50; 
    $mail->IsHTML(true);  
    $mail->Subject  = "Realiza tu Test Ahora"; // Asunto del mensaje.
    $mail->Body     =  "<b>$code \n<br /> es tu código eQuest".
    "Ingresa ya el código <b> $code </b> de en la app eQuest realizar tu cuestionario. \n<br />";

    $sms ="Ingresa ya $code en la app eQuest para realizar tu cuestionario";
    $url = "http://www.afilnet.com/http/sms/?email=".$email."&pass=".$pass."&mobile=".$celular."&id=".urlencode($idsender)."&country=".$prefix."&sms=".urlencode($sms); // URL de petición  
    $response = file_get_contents($url);  
    if($mail->Send()){  
        if($response){
            switch($response) {  
                case "OK":  
                    //echo "Envío exitoso"; 
                    header('location: curso.php?id='.$curso);  
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
        
    } else {  
        echo "Error en la petición";  
    }
}


// Aquí van los datos que apareceran en el correo que reciba



// Datos del servidor SMTP, podemos usar el de Google, Outlook, etc...

}else{
	//errroooor
	echo "<script>alert('Error al enviar el formulario, empty');</script>";
	
}

?>