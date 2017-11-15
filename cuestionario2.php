<?php  
$db_host="gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com";
$db_user="admin";
$db_password="admin123";
$db_name="USERSDB";
$db_table_name="userinfo";
session_start();
$title = $_POST['title'];
$id_curso = $_GET['id'];
$conn = new mysqli("gpstraking.cvsno6ctfz1z.us-west-2.rds.amazonaws.com", "admin", "admin123", "USERSDB"); // 
mysqli_set_charset($conn,'utf8');  
if (!$conn) {
    die('No se ha podido conectar a la base de datos');
} 
 $sql1 = "SELECT id FROM cuestionarios WHERE title LIKE '$title' AND id_curso LIKE '$id_curso'";
 $result = mysqli_query($conn, $sql1);  
 if(mysqli_num_rows($result) > 0){
 	echo "El título ya existe";
 }else{
	 $sql = "INSERT INTO cuestionarios(title, id_curso) VALUES('".$title."', '".$id_curso."')";  
	 if(mysqli_query($conn, $sql)){ 
	 	   $result = mysqli_query($conn, $sql1);
	 	   $row = mysqli_fetch_array($result);
	 	   $id_cuestionario = $row["id"];
	 	   $tipo = $_POST['tipo'];
	 	   if($tipo==1){
	 	    	$tipo="p";
	 	    	foreach ($_POST['cmm'] as $pregunta) {
	 	    		// $pregunta = html_entity_decode($pregunta, ENT_QUOTES | ENT_HTML5, "UTF-8");
			 	    $sql2 = "INSERT INTO preguntas(pregunta, tipo, id_cuestionario) VALUES('".$pregunta."','".$tipo."','".$id_cuestionario."')";
			 	    $sql3 = "SELECT idpreguntas FROM preguntas WHERE id_cuestionario LIKE '$id_cuestionario'";
	 	    		if(mysqli_query($conn, $sql2)){
		 	    		$result = mysqli_query($conn, $sql3);
				 	    while($row = mysqli_fetch_array($result)){
				 	    	$idpregunta = $row['idpreguntas'];
				 	    	$opcion = "Totalmente";
				 	    	$sql4 = "INSERT INTO opciones(idpregunta, opcion) VALUES('".$idpregunta."', '".$opcion."')";
				 	    	mysqli_query($conn, $sql4);
				 	    	$opcion = "Mucho";
				 	    	$sql4 = "INSERT INTO opciones(idpregunta, opcion) VALUES('".$idpregunta."', '".$opcion."')";
				 	    	mysqli_query($conn, $sql4);
				 	    	$opcion = "Ni mucho ni poco";
				 	    	$sql4 = "INSERT INTO opciones(idpregunta, opcion) VALUES('".$idpregunta."', '".$opcion."')";
				 	    	mysqli_query($conn, $sql4);
				 	    	$opcion = "Poco";
				 	    	$sql4 = "INSERT INTO opciones(idpregunta, opcion) VALUES('".$idpregunta."', '".$opcion."')";
				 	    	mysqli_query($conn, $sql4);
				 	    	$opcion = "Nada";
				 	    	$sql4 = "INSERT INTO opciones(idpregunta, opcion) VALUES('".$idpregunta."', '".$opcion."')";
				 	    	mysqli_query($conn, $sql4);
				 	    	
				 	    }
	 	    		}else{
	 	    			die('Error: ' . mysqli_error());
	 	    		}
	 	    	}
	 	   }else{
	 	   		$tipo="c";	 	   		
	 	   		$opciones = $_POST['user_role'];
	 	   		foreach ($_POST['pregunta'] as $k => $pregunta) {
	 	   			$opcion = $opciones[$k];
	 	   			if ($pregunta!=""){
				 	    $sql2 = "INSERT INTO preguntas(pregunta, tipo, num_resp, id_cuestionario) VALUES('".$pregunta."','".$tipo."','".$opcion."','".$id_cuestionario."')";
		 	    		if(!mysqli_query($conn, $sql2)){
		 	    			echo "Error" . mysqli_error();
		 	    		}
	 	    	    }
	 	    	    $k++;
	 	   		}

		 	    $sql3 = "SELECT idpreguntas FROM preguntas WHERE id_cuestionario LIKE '$id_cuestionario'";
    			$result = mysqli_query($conn, $sql3);
    			$row = mysqli_fetch_array($result);
    			$idpregunta = $row['idpreguntas'];
    			$key = 0;
    			$count = 0;
    			foreach ($_POST['opcion'] as $opcion) {
    				if($count!=4){
	    				if($opcion!=""){
			 	    	$sql4 = "INSERT INTO opciones(idpregunta, opcion) VALUES('".$idpregunta."', '".$opcion."')";
			 	    	mysqli_query($conn, $sql4);
			 	    	$key=0;
			 	    	$count++;

	    				}elseif ($key==0) { //Si la opción anterior no estaba vacía..
			 	    		$key = 1;
			 	    		$row = mysqli_fetch_array($result);
			 	    		$idpregunta = $row['idpreguntas'];
			 	    		$count=0;
		 	    		
	    				}else{
	    					$key=0;
	    					$count=0;
	    				}
	    			}else{
		 	    		$row = mysqli_fetch_array($result);
		 	    		$idpregunta = $row['idpreguntas'];
		 	    		$count=0;
	    			}
    			}
	 	   	
	 	   }
	 }else{
	 	echo 'Error.';
	 }
	 			$idd = $id_curso . '-' .$id_cuestionario;
    			header('Location: cuestionario3.php?id='.$idd.'');
    			exit;  	
 }
 
 ?> 