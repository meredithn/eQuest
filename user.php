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
            <li><a class="smoothscroll" href="#hero">Cursos</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <ul class="header-social">
         <li><a href="index.html"> Cerrar sesión</a></li>
      </ul>

   </header> <!-- Header End -->

<?php
session_start();
$email = $_SESSION['email'];
$logged = $_SESSION['logged_in'];
?>
   <!-- Homepage Hero
   ================================================== -->
   <section id="hero">
            <div class="hero-text">
               <h1 class="responsive-headline"></h1><!-- ¡Bienvenido, <?= $email ?>! -->
               <h1 class="responsive-headline">Tus cursos y conferencias: </h1>
            </div>
           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <div id="live_data"></div>                 
                </div>  
           </div> 
            <div class="hero-text">
               <p>Puedes agregar, eliminar y editar tus cursos y conferencias en pocos pasos. Selecciona o crea un grupo para que puedas preparar tus cuestionarios.</p>
            </div>

   </section> <!-- Homepage Hero end -->
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

               <div class="columns last">
                  <h3 class="contact">Contáctanos</h3>
                  <ul>
                    <li><a href="mailto:eQuest.cc@gmail.com">eQuest.cc@gmail.com</a></li>
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
<script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var first_name = $('#first_name').text();  
           if(first_name == '')  
           {  
                alert("Ingresa Nombre de Curso");  
                return false;  
           }  
 
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{first_name:first_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data); 
                     fetch_data();  
                }  
           })  
      });  
      // function edit_data(id)  
      // {  
      //      $.ajax({  
      //           url:"edit.php",  
      //           method:"POST",  
      //           data:{id:id},  
      //           dataType:"text",  
      //           success:function(data){ 
                 
      //           }  
      //      });  
      // }  
      // $(document).on('click', '.link', function(){  
      //      var id = $(this).data("id1");  
      //      edit_data(id);  
      // });  
 
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
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