<?php  
// $idp = $_GET["idp"];    
// $_SESSION['idp'] =  $idp;
  
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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     
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
   <script language="javascript" type="text/javascript" src="jquery.equalheights.js"></script>

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
      <form action="cuestionario2.php?id=<?= $id ?>" method="post">
        <div class="sub-main-w3"> 
            <input type="text" name="title" placeholder="Mi Cuestionario" required>

        </div>
                 <div class="text-container">

                    <div class="twelve columns">
                      <div class="formulario1">
                        <div class="radio">
                          <h2>Seleccione el tipo de Cuestionario:</h2>
                          <input type="radio"  name="tipo" id="percep" value="1" required>
                          <label for="percep">Test de Percepción</label>
                          <input type="radio" name="tipo" id="compren" value="2">
                          <label for="compren">Test de Comprensión</label>
                          <p id="demo"></p>

                        </div>
                      </div>

                    </div>

                 </div>
              </div>
            <div class="toggleC">
              <div id="example-6">
              <div class="newspaper"> 
                        <h3 align="left">Pregunta 1:</h3>
                        <h3 align="left">
                      <div class="sub-main-w5">
                        <input class="form-control" type="text" name="pregunta[]" placeholder="Pregunta" required>
                      </div></h3>
                        <h3 align="left">Opciones de respuesta:</h3>
                      <div class="sub-main-w6">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 1" required>
                        <input type="radio" name="user_role[0]" value="1" required novalidate>
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 2" required novalidate>
                        <input type="radio" name="user_role[0]" value="2">
                      <div class="op3">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 3" >
                        <input type="radio" name="user_role[0]" value="3" disabled>
                      </div>
                      <div class="op4">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 4" disabled>
                        <input type="radio" name="user_role[0]" value="4" disabled>
                      </div>
                    </div>
  <!--               <center>
                <button type="button" id="btnAdd-6" class="btn btn-primary">+</button>
                </center> -->
                      <br></br>
                        <h3 align="left">Pregunta 2:</h3>
                        <h3 align="left">
                      <div class="sub-main-w5">
                      <div class="preg2">
                        <input class="form-control" type="text" name="pregunta[]" placeholder="Pregunta">
                      </div>
                      </div>
                    </h3>
                        <h3 align="left">Opciones de respuesta:</h3>
                      <div class="sub-main-w6">
                      <div class="pregg2">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 1">
                        <input type="radio" name="user_role[1]" value="1">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 2">
                        <input type="radio" name="user_role[1]" value="2">
                      </div>
                      <div class="op5">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 3" >
                        <input type="radio" name="user_role[1]" value="3" disabled>
                      </div>
                      <div class="op6">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 4" disabled>
                        <input type="radio" name="user_role[1]" value="4" disabled>
                      </div>
                     </div>
                     <br></br>
                    <h3 align="left">Pregunta 3:</h3>
                        <h3 align="left">
                      <div class="sub-main-w5">
                      <div class="preg3">
                        <input class="form-control" type="text" name="pregunta[]" placeholder="Pregunta">
                      </div>
                      </div>
                    </h3>
                        <h3 align="left">Opciones de respuesta:</h3>
                      <div class="sub-main-w6">
                      <div class="pregg3">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 1">
                        <input type="radio" name="user_role[2]" value="1">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 2">
                        <input type="radio" name="user_role[2]" value="2">
                      </div>
                      <div class="op7">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 3" >
                        <input type="radio" name="user_role[2]" value="3" disabled>
                      </div>
                      <div class="op8">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 4" disabled>
                        <input type="radio" name="user_role[2]" value="4" disabled>
                      </div>
                     </div>
                     <br></br>
                    <h3 align="left">Pregunta 4:</h3>
                        <h3 align="left">
                      <div class="sub-main-w5">
                      <div class="preg4">
                        <input class="form-control" type="text" name="pregunta[]" placeholder="Pregunta">
                      </div>
                      </div>
                    </h3>
                        <h3 align="left">Opciones de respuesta:</h3>
                      <div class="sub-main-w6">
                      <div class="pregg4">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 1">
                        <input type="radio" name="user_role[3]" value="1">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 2">
                        <input type="radio" name="user_role[3]" value="2">
                      </div>
                      <div class="op8">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 3" >
                        <input type="radio" name="user_role[3]" value="3" disabled>
                      </div>
                      <div class="op9">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 4" disabled>
                        <input type="radio" name="user_role[3]" value="4" disabled>
                      </div>
                     </div>
  <!--              
                <button type="button" id="btnAdd-6" class="btn btn-primary">+</button>
                </center> -->
              </div>

<!--                 <div class="row group">

                        <h3 align="left">Pregunta 3:</h3>
                        <input class="form-control" type="text" name="pregunta[]" placeholder="Pregunta" required>
                        <h3 align="left">Opciones de respuesta:</h3>
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 1" required>
                        <input type="radio" name="user_role[2]" value="1" required>
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 2" required>
                        <input type="radio" name="user_role[2]" value="2">
                      <div class="op7">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 3" >
                        <input type="radio" name="user_role[2]" value="3" disabled>
                      </div>
                      <div class="op8">
                        <input class="form-control" type="text" name="opcion[]" placeholder="Opción 4">
                        <input type="radio" name="user_role[2]" value="4" disabled>
                      </div>
                </div> -->
              </div>
            </div>
              <div class="toggleP">
                <div class="container">  
                       
                   <h3 align="center">Preguntas</h3> 
                   <!-- <div id="live_data2"></div>       -->    
                    <center>   
                      <div class="formulario2">
                        <div class="checkbox"> 

                          <input type="checkbox" name="cmm[]" id="1" value="¿Qué tanto ha logrado mantener tu atención hasta este momento?" checked="true"><label for="1">¿Qué tanto ha logrado mantener tu atención hasta este momento?</label>  
                          <input type="checkbox" name="cmm[]" id="2" value="¿Qué tan interesante te ha parecido hasta este momento?" checked="true"><label for="2">¿Qué tan interesante te ha parecido hasta este momento?</label>
                          <input type="checkbox" name="cmm[]" id="3" value="¿Qué tan de acuerdo estás con la metodología utilizada?" checked="true"><label for="3">¿Qué tan de acuerdo estás con la metodología utilizada?</label>
                          <input type="checkbox" name="cmm[]" id="4" value="¿Qué tan agradable te parece la interacción entre expositor y asistente en el desarrollo de un nuevo tema?" ><label for="4">¿Qué tan agradable te parece la interacción entre expositor y asistente en el desarrollo de un nuevo tema?</label>
                          <input type="checkbox" name="cmm[]" id="5" value="¿Qué tan agusto te sientes con el entorno?" ><label for="5">¿Qué tan agusto te sientes con el entorno?</label>
                        </div>   
                      </div>
                    </center>
                  </div>                  
              </div><!--            <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h3 align="center">Seleccione la Muestra de Asistentes</h3><br />  
                     <div id="live_data"></div>                 
                </div>  
           </div>  -->
                <center>
                  <input onclick="require()" type="submit" name="next" value="Siguiente"><!--  disabled="true" -->
                </center>


      </form>

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
                    <li><a href="mailto:eQuest.cc@gmail.comm">eQuest.cc@gmail.com</a></li>
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
      function require() {
          var x = document.getElementById("compren").required;
          document.getElementById("demo").innerHTML = "*Debes seleccionar una opción primero.";


      }
 $(document).ready(function(){ 

    $('.op3 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op3 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op4 input[type="text"]').attr('disabled', 'disabled');
        } else {
            $('.op4 input[type="text"]').attr('disabled', false);
        }
    });

    $('.op5 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op5 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op6 input[type="text"]').attr('disabled', 'disabled');
        } else {
            $('.op6 input[type="text"]').attr('disabled', false);
        }
    });

    $('.op7 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op7 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op8 input[type="text"]').attr('disabled', 'disabled');
        } else {
            $('.op8 input[type="text"]').attr('disabled', false);
        }
    });
    $('.op9 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op9 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op10 input[type="text"]').attr('disabled', 'disabled');
        } else {
            $('.op10 input[type="text"]').attr('disabled', false);
        }
    });
    $('.op3 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op3 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op3 input[type="radio"]').attr('checked', false);
            $('.op3 input[type="radio"]').attr('disabled', 'disabled');
        } else {
            $('.op3 input[type="radio"]').attr('disabled', false);
        }
    });
        $('.op4 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op4 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op4 input[type="radio"]').attr('checked', false);
            $('.op4 input[type="radio"]').attr('disabled', 'disabled');
        } else {
            $('.op4 input[type="radio"]').attr('disabled', false);
        }
    });
        $('.op5 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op5 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op5 input[type="radio"]').attr('checked', false);
            $('.op5 input[type="radio"]').attr('disabled', 'disabled');
        } else {
            $('.op5 input[type="radio"]').attr('disabled', false);
        }
    });
        $('.op6 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op6 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op6 input[type="radio"]').attr('checked', false);
            $('.op6 input[type="radio"]').attr('disabled', 'disabled');
        } else {
            $('.op6 input[type="radio"]').attr('disabled', false);
        }
    });
        $('.op7 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op7 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op7 input[type="radio"]').attr('checked', false);
            $('.op7 input[type="radio"]').attr('disabled', 'disabled');
        } else {
            $('.op7 input[type="radio"]').attr('disabled', false);
        }
    });
        $('.op8 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op8 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op8 input[type="radio"]').attr('checked', false);
            $('.op8 input[type="radio"]').attr('disabled', 'disabled');
        } else {
            $('.op8 input[type="radio"]').attr('disabled', false);
        }
    });
        $('.op9 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op9 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op9 input[type="radio"]').attr('checked', false);
            $('.op9 input[type="radio"]').attr('disabled', 'disabled');
        } else {
            $('.op9 input[type="radio"]').attr('disabled', false);
        }
    });
        $('.op10 input[type="text"]').keyup(function() {

        var empty = false;
        $('.op10 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.op10 input[type="radio"]').attr('checked', false);
            $('.op10 input[type="radio"]').attr('disabled', 'disabled');
        } else {
            $('.op10 input[type="radio"]').attr('disabled', false);
        }
    });
    $('.preg2 input[type="text"]').keyup(function() {

        var empty = false;
        $('.preg2 input[type="text"]').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.pregg2 input[type="text"]').attr('required', false);
            $('.pregg2 input[type="radio"]').attr('required', false);
        } else {
            $('.pregg2 input[type="text"]').attr('required', true);
            $('.pregg2 input[type="radio"]').attr('required', true);
        }
    });
    $('.pregg2 input[type="text"]').keyup(function() {

        var empty = true;
        $('.pregg2 input[type="text"]').each(function() {
            if ($(this).val().length > 0) {
                empty = false;
            }
        });

        if (empty) {
            $('.preg2 input[type="text"]').attr('required', false);
        } else {
            $('.preg2 input[type="text"]').attr('required', true);
            $('.pregg2 input[type="text"]').attr('required', true);
        }
    });

    $('.pregg3 input[type="text"]').keyup(function() {

        var empty = true;
        $('.pregg3 input[type="text"]').each(function() {
            if ($(this).val().length > 0) {
                empty = false;
            }
        });

        if (empty) {
            $('.preg3 input[type="text"]').attr('required', false);
        } else {
            $('.preg3 input[type="text"]').attr('required', true);
            $('.pregg3 input[type="text"]').attr('required', true);
        }
    });

    $('.pregg4 input[type="text"]').keyup(function() {

        var empty = true;
        $('.pregg4 input[type="text"]').each(function() {
            if ($(this).val().length > 0) {
                empty = false;
            }
        });

        if (empty) {
            $('.preg4 input[type="text"]').attr('required', false);
        } else {
            $('.preg4 input[type="text"]').attr('required', true);
            $('.pregg4 input[type="text"]').attr('required', true);
        }
    });
      $('input[name="tipo"]').on('change', function() {
        if(+this.value === 1 && this.checked){
          $('.toggleC input[type="text"]').val("Holi");
          $('.toggleC input[type="radio"]').attr('checked', true);
        }else{
          $('.toggleC input[type="text"]').val("");
          // $('.toggleC input[type="radio"]').attr('checked', false);
        }
      }).change();
        // $('#startDate').daterangepicker({
        //   singleDatePicker: true,
        //   startDate: moment().subtract(6, 'days')
        // });
      function fetch_data()  
      {  
           $.ajax({  
                url:"select4.php",  
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
                url:"select5.php",  
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
           var pregunta = $('#pregunta').text();

           if(first_name == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
 
           $.ajax({  
                url:"insert3.php",  
                method:"POST",  
                data:{pregunta:pregunta, first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data2();  
                }  
           })  
      }); 
      $('input[name="tipo"]').on('change', function() {
        // this, in the anonymous function, refers to the changed-<input>:
        // select the element(s) you want to show/hide:
        $('.toggleP')
            // pass a Boolean to the method, if the numeric-value of the changed-<input>
            // is exactly equal to 2 and that <input> is checked, the .business-fields
            // will be shown:
            .toggle(+this.value === 1 && this.checked);
      // trigger the change event, to show/hide the .business-fields element(s) on
      // page-load:
      }).change();
      $('input[name="tipo"]').on('change', function() {
        // this, in the anonymous function, refers to the changed-<input>:
        // select the element(s) you want to show/hide:
        $('.toggleC')
            // pass a Boolean to the method, if the numeric-value of the changed-<input>
            // is exactly equal to 2 and that <input> is checked, the .business-fields
            // will be shown:
            .toggle(+this.value === 2 && this.checked);
      // trigger the change event, to show/hide the .business-fields element(s) on
      // page-load:
      }).change();

      
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
           if(confirm("¿Seguro quieres borrar esto?"))  
           {  
                $.ajax({  
                     //url:"delete2.php",  
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