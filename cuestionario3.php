<?php  

$id = $_GET["id"];    

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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
   <link rel="stylesheet" href="css/estilos.css">
    
    <script type="text/javascript" src="moment.js"></script>
    <script type="text/javascript" src="daterangepicker.js"></script>
    <link href="skins/line/red.css" rel="stylesheet">
    <script src="icheck.js"></script>

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

         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <ul class="header-social">
      
         <li><a href="index.html"> Cerrar sesión</a></li>
      </ul>

   </header> <!-- Header End -->


   <!-- Homepage Hero
   ================================================== -->
   <section id="features">




      <div class="row content">
                 <div class="text-container">
                    <div class="twelve columns">
                          <h2>Selecciona la muestra de asistentes que realizarán el cuestionario</h2>
                    </div>
                 </div>
              </div>
                 

           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h3 align="left">Asistentes: </h3><br />  
                     <div id="live_data"></div>                 
                </div>  
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
            <a class="smoothscroll" title="Back to Top" href="#features"><i class="icon-up-open"></i></a>
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
<!--   <script src="jquery.duplicate.js"></script>
 -->  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- jQuery Multifield -->
<!--   <script src="jquery.multifield.min.js"></script>
 -->
  </body>

</html>

<script>

  var k = 0;
function togglerandom(master){
  var cbarray = document.getElementsByName('cbg1[]');
  for(var i = 0; i < cbarray.length; i++){
      cbarray[i].checked = false;
  }
  var all = document.getElementById('all');
  all.checked = false;

  if(master.checked==true){
    var rarray = Array.from(Array(cbarray.length).keys());
    var zp = Math.pow(0.5199, 2)*0.5*(1-0.5);
    var n = (zp+Math.pow(0.05, 2))/(zp/cbarray.length +Math.pow(0.05, 2));
    n = Math.ceil(n);
    rarray = shuffle(rarray);
    rarray = rarray.slice(0,n);
    for(var i = 0; i < rarray.length; i++){
        cbarray[rarray[i]].checked = true;

    } 
    k=1;   
  }else{
    k=0;    
  }
}
function togglecheckboxes(master){
  var cbarray = document.getElementsByName('cbg1[]');
  var rand = document.getElementById('rand');
  rand.checked = false;
    for(var i = 0; i < cbarray.length; i++){
        cbarray[i].checked = master.checked;
    }
}
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;
  //Fisher-Yates (aka Knuth) Shuffle
  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}
</script>

<script type="text/javascript">         

 $(document).ready(function(){ 

      function fetch_data()  
      {  
           $.ajax({  
                url:"select4.php?id=<?= $id ?>", 
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data(); 
 
 });  
 </script>