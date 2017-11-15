<?php  
$id = $_GET["id"];    
$_SESSION['id'] =  $id;

?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--== -->
   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>eQuest</title>
   <meta name="description" content="">  
   <meta name="author" content="">
   <link rel="stylesheet" href="css/estilos.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

   <!-- Mobile Specific Metas
   ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/prettyPhoto.css">

   <!-- Script
   ================================================== -->
   <script src="js/modernizr.js"></script>

   <!-- Favicons
   ================================================== -->
   <link rel="shortcut icon" href="eQuest6.png" >

</head>

<body>

   <div id="preloader">      
      <div id="status">
         <img src="images/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>

   <!-- Header
   ================================================== -->
   <header>

      <div class="logo">
         <a class="smoothscroll" href="#hero"><img alt="" src="images/eQuest.png"></a>
      </div>

      <nav id="nav-wrap">         
         
         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show Menu</a>
         <a class="mobile-btn" href="#" title="Hide navigation">Hide Menu</a>         

         <ul id="nav" class="nav">
            <li><a class="smoothscroll" href="user.php">Cursos</a></li>
            <li><a class="smoothscroll" href="#hero">Cuestionarios</a></li>
            <li><a class="smoothscroll" href="#subscribe">Registro de Estudiantes</a></li>
            <li><a class="smoothscroll" href="#features">Lista</a></li>

         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <ul class="header-social">
     
         <li><a href="index.html"> Cerrar sesión</a></li>
      </ul>

   </header> <!-- Header End -->


   <!-- Homepage Hero
   ================================================== -->
   <section id="hero">


            <div class="hero-text">
               <h1 class="responsive-headline"> Cuestionarios </h1> 
           </div>  
           <div class="container">  
 
                     <div id="live_data"></div>                 
             <div class="buttons">
               <a class="button trial" href="cuestionario.php?id=<?= $id ?>">Crear Cuestionario</a>
            </div>
           <div class="hero-text">
               <p></p>
            </div>


   </section> <!-- Homepage Hero end -->

   <!-- Subscribe
   ================================================== -->
  <section id="subscribe">
      <div class="row section-head">

         <div class="twelve columns">

            <h1>Registra a tu Grupo</h1>
                      <p>Selecciona el archivo CSV de tu grupo de clase/conferencia, lo puedes exportar desde Excel como y en su formato debe llevar los campos "Nombre", "Correo" y "Celular" en ese orden. <a href="https://docs.google.com/spreadsheets/d/1e8xXkq6BVWGxVIUsjbbopm2IAfHF6y_RpvuUkjUQkqg/edit?usp=sharing" target="_blank">Puedes utilizar nuestra plantilla en línea aquí.</a></p>
        </div>
      </div>
      <form name="import" method="post" enctype="multipart/form-data" action="#features">
          <input type="file" name="file" id="file" class="inputfile" accept=".CSV" />
          <label class="button label" for="file" id="label1"><h2>Selecciona el CSV</h2></label>
          <center><input class="button" type="submit" name="submit" value="Submit" /></center>
      </form>
      <?php

        include ("connect.php");
        mysqli_set_charset($conn,'utf8'); 
        if(isset($_POST["submit"]))
        {
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 0;
           

          while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
          {
            $name = $filesop[0];
            $email = $filesop[1];
            $cel = $filesop[2];
            
            $sql = mysqli_query($conn2,"INSERT INTO estudiantes (nombre, correo, celular, id_curso) VALUES ('$name','$email','$cel','$id')");
            $c = $c + 1;

          }

            if($sql){
              echo "Se han cargado correctamente los datos. ". $c ." Personas registradas.";
            }else{
              echo "Al parecer hay un problema, verificar el archivo subido";
            }
        }
      ?>
   </section>  
      <!-- Screenshots
   ================================================== -->
   <section id="features">

           <div class="container">  
            <center>
             <div class="buttons">
              <h3 align="center">¿Ya todos tienen la app móvil eQuest?</h3>
               <a class="button trial" href="enviar2.php?id=<?= $id ?>">Enviar APK</a>
             </center>
                <br />  
                <div class="table-responsive">  
                     <h3 align="center">Lista de Asistentes</h3><br />  
                     <div id="live_data2"></div>    
                     <br />             
            </div> 
            </div>      
   </section> <!-- Screenshots End -->
         <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">         

         <div class="six columns info">

            <div class="footer-logo">
               <a href="#">
                  <img src="images/eQuest.png" alt="" />
               </a>
            </div>

            <p>Para clases y conferencias.
            </p>

         </div>

         <div class="six columns right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Ubicación</h3>
                  <p>
                  Universidad del Norte<br>
                  Barranquilla, Colombia<br>
                  
                  </p>
               </div>

<!--                <div class="columns">
                  <h3 class="social">socialize</h3>
                  <ul>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Twitter</a></li>
                     <li><a href="#">GooglePlus</a></li>
                  </ul>
               </div> -->

               <div class="columns last">
                  <h3 class="contact">Contáctanos</h3>
                  <ul>
                    <li><a href="eQuest.cc@gmail.com">eQuest.cc@gmail.com</a></li>
                  </ul>
               </div>

            </div> <!-- Nested Row End -->

         </div>

         <p class="copyright">&copy; 2017 eQuest | Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a></p>

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><i class="icon-up-open"></i></a>
         </div>

      </div> <!-- Row End -->

   </footer> <!-- Footer End-->
   
   <!-- Java Script
   ================================================== -->

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/jquery.fitvids.js"></script>
   <script src="js/imagelightbox.js"></script>
   <script src="js/jquery.prettyPhoto.js"></script>   
   <script src="js/main.js"></script>

</body>

</html>
<script src="js/custom-file-input.js"></script>
<script>  
 $(document).ready(function(){ 
 
      function fetch_data()  
      {  
           $.ajax({  
                url:"select2.php?id=<?= $id ?>",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data(); 
      function fetch_data2()  
      {  
           $.ajax({  
                url:"php/select3.php?id=<?= $id ?>",  
                method:"POST",  
                success:function(data){  
                     $('#live_data2').html(data);  
                }  
           });  
      } 
      fetch_data2();
      $(document).on('click', '#btn_add', function(){  
           var first_name = $('#first_name').text();  
           var last_name = $('#last_name').text();  
           if(first_name == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
 
           $.ajax({  
                url:"insert2.php",  
                method:"POST",  
                data:{first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
  
      
      // function edit_data(id, text, column_name)  
      // {  
      //      $.ajax({  
      //           url:"edit.php",  
      //           method:"POST",  
      //           data:{id:id, text:text, column_name:column_name},  
      //           dataType:"text",  
      //           success:function(data){  
      //                alert(data);  
      //           }  
      //      });  
      // }  
      // $(document).on('blur', '.first_name', function(){  
      //      var id = $(this).data("id1");  
      //      var first_name = $(this).text();  
      //      edit_data(id, first_name, "first_name");  
      // });  
      $(document).on('blur', '.last_name', function(){  
           var id = $(this).data("id2");  
           var last_name = $(this).text();  
           edit_data(id,last_name, "last_name");  
      });  
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete2.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>