<?php 
  
    $email = "meredith.n@hotmail.com"; // Email de la cuenta de cliente   
    $pass = "3556236m"; // Clave de la cuenta de cliente   
    $mobile = "3157656153"; // Móvil destino   
    $idsender = "3002760424"; // Remitente, 11 caracteres máximo 
    $prefix = "57"; // Prefijo del pais   
    $sms = "Ingresa tu PIN 113-23 en eQuest para realizar tu cuestionario ahora."; // Mensaje a enviar   

    $url = "http://www.afilnet.com/http/sms/?email=".$email."&pass=".$pass."&mobile=".$mobile."&id=".urlencode($idsender)."&country=".$prefix."&sms=".urlencode($sms); // URL de petición  

    # Hacemos la petición HTTP   
    $response = file_get_contents($url);  
    if($response) {  
        switch($response) {  
            case "OK":  
                echo "SMS enviado con éxito";   
                break;  
            case "-1":   
                echo "Error en el login, usuario o clave incorrectas";  
                break;  
            default:   
                echo "No dispone de créditos para realizar el envío";  
        }  
    } else {  
        echo "Error en la petición";  
    }  
 
?>