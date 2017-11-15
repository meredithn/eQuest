<?php
$id = $_GET["id"];  
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>eQuest</title>
	<meta name="description" content="">  
	<meta name="author" content="">

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
   <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
           <!-- <li><a class="smoothscroll" href="#subscribe">Subscribe</a></li> -->
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <ul class="header-social">
      
         <li><a href="index.html"> Cerrar sesión</a></li>
      </ul>

   </header> <!-- Header End -->
    <!-- Homepage Hero
   ================================================== -->
   <section id="features">

      <div class="row">

         <div class="twelve columns">

            
               <center><h1 class="responsive-headline">Resultados del Test.</h1></center>


               
                
             <div id="chart_div" ">
                <p id="p1"></p>
             </div><p id="p11"></p>
             <div id="chart_div2" ">
                <p id="p2"></p>
             </div>
                <p id="p12"></p>
                <p id="p13"></p>
                <p id="p14"></p>
                <p id="p15"></p>
             <div id="chart_div3" ">
                <p id="p3"></p>
             </div>
             <div id="chart_div4" ">
                <p id="p4"></p>
             </div>
             <div id="chart_div5" ">
                <p id="p5"></p>
             </div>

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
   <script>
   $(document).ready(function(){    
       readData();
   });
      function readData(){  //This function fetches the requested php code and inserts it on the function defined
         var idcuestionario = '<?php echo $id ;?>';
          $.post("getdata.php?id="+idcuestionario+".php",function(data){
              processreadData(data)
          });
      }

      var title = [];
      var idpregunta = [];
      var pregunta = [];
      var tipo = [];
      var idopcion = [];
      var opcion = [];
      var idestudiante = [];
      var correcta = [];
      var atributos = ["0","0","0","0","0"];
      var promAtr = [0,0,0,0,0];
      var counAtr =[0,0,0,0,0];
      var atrP = ["Atención", "Interés", "Metodología", "Interacción", "Entorno"];
      var respP = ["Totalmente","Mucho","Ni mucho ni poco","Poco","Nada"]
      var pesosP = [5,4,3,2,1];
      var peso;
      var ptotal = 0;
      var countTotal = 0;
      var graph1 = [];
      var graph2 = [];
      var fila = [];
      var estudiante = [];
      var satisf = [];
      var idpreg = [];
      var preg = [];
      var idop = [];
      var opc = [];
      var corr = [];
      var preguntasP = ["¿Qué tanto ha logrado mantener tu atención hasta este momento?", "¿Qué tan interesante te ha parecido hasta este momento?", "¿Qué tan de acuerdo estás con la metodología utilizada?", "¿Qué tan agradable te parece la interacción entre expositor y asistente en el desarrollo de un nuevo tema?", "¿Qué tan agusto te sientes con el entorno?"];
      function processreadData(data){
         var colours = ['#218B8E','#7BB9CD','#7BBE0A','#692080','#3768FB'];
         var mydata = data.split("__");
         var entiredata = mydata[0].split("*");
         var entiredata2 = mydata[1].split("*");
         for(i=0;i<entiredata.length-1;i++){
           fila = entiredata[i].split("_");
           title.push(fila[0]);
           idpregunta.push(fila[1]);
           pregunta.push(fila[2]);
           tipo.push(fila[3]);
           idopcion.push(fila[4]);
           opcion.push(fila[5]);
           idestudiante.push(fila[6]);
           correcta.push(fila[7]);
         }
         for(i=0;i<entiredata2.length-1;i++){
           fila = entiredata2[i].split("_");
           idpreg.push(fila[0]);
           preg.push(fila[1]);
           idop.push(fila[2]);
           opc.push(fila[3]);
           corr.push(fila[4]);

         }
         for(i=0;i<title.length-1;i++){
            for(k=i+1;k<title.length;k++){
               if(idpregunta[i]==idpregunta[k] && idestudiante[i]==idestudiante[k]){
                  pregunta[i] = "";  
               // if(k>23){
               //    ////console.log(idpregunta[i],idpregunta[k]);
               //    ////console.log(idestudiante[i],idestudiante[k]);}
               }
            }
         }
         //////console.log(pregunta);
         var satest = [];
         //         id,g,a,i,m,i,e]
         var op1;
         var op2;
         var preg1;
         var x;
         // idpregunta = idpregunta.map(Number);
         // idopcion = idopcion.map(Number);
         var idopcion2 = idopcion;
         if(tipo[0]=="c"){
            var preguntasC = [];
            var correctasC = [];
            var opcionesC = [];
            var opt = [];
            //////console.log(preguntasC);
            for(i=0;i<idpreg.length;i++){
               opt.push(opc[i]);
               if(idpreg[i+1]!=idpreg[i]){
                  preguntasC.push(preg[i]);
                  correctasC.push(corr[i]);
                  opcionesC.push(opt);
                  opt=[];
               }
            }
            var estuC = [];
            var puntC = [];
            // ////console.log(pregunta);
            for(i=0;i<idestudiante.length;i++){
               if(estuC.indexOf(idestudiante[i])==-1){
                  estuC.push(idestudiante[i]);
                  puntC.push(0);
               }
               if(pregunta[i]!=""){
                  if(correcta[i]==opcionesC[preguntasC.indexOf(pregunta[i])].indexOf(opcion[i])+1){
                     puntC[estuC.indexOf(idestudiante[i])] = puntC[estuC.indexOf(idestudiante[i])] +1;
                  }
               }
            }
            // ////console.log(preguntasC,opcionesC);
            // op1 = Math.min(...idopcion)-1;//Opc 0
            // op2 = op1;
            // preg1 = Math.min(...idpregunta);
            var pregC = [];
            var asisC = [];
            var pregArray = [];
            var correct;
            var color1 = '#000';
            var colours2 = ['#6AAAC2','#574679','#DC5556','#F7DB80'];

            var pie1 = [];
            var pie2 = [];
            var iscorrect;
            for(i=0;i<puntC.length;i++){
               if(pie1.indexOf(puntC[i])==-1){
                  pie1.push(puntC[i]);
                  pie2.push(0);
               }
               pie2[pie1.indexOf(puntC[i])]++;

            }
            graph1 = [];
            var nel = ' respuestas correctas';
            graph1.push(['Opción de respuesta', 'Marcaron esta opción']);
            for(i=0;i<pie2.length;i++){
               if(pie1[i]==1){
                  nel=' respuesta correcta';
               }else{
                  nel = ' respuestas correctas';
               }
               graph1.push(['Personas que obtuvieron '+pie1[i].toString()+nel,pie2[i]]);
            }
            google.charts.load('current', {
               packages: ['corechart', 'bar'],
               callback: function(){

                  var data = google.visualization.arrayToDataTable(graph1);
                  var options = {
                      title: 'Número de respuestas correctas'
                  };
                  document.getElementById('chart_div').style.width = "900px";
                  document.getElementById('chart_div').style.height = "500px";
                  var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

                  chart.draw(data, options);
                  for(i=0; i<preguntasC.length;i++){
                       pregArray = [0,0,0,0];
                       correct = correctasC[i];
                       for(k=0;k<idpregunta.length;k++){
                          if(pregunta[k]!="" && preguntasC[i]==pregunta[k]){
                             pregArray[(opcionesC[preguntasC.indexOf(pregunta[k])].indexOf(opcion[k]))]++;
                          }
                       }
                       graph2 = [];
                       graph2.push(['Pregunta', 'Frecuencia', { role: 'style' }, { role: 'annotation' }]);
                       for(m=0;m<opcionesC[i].length;m++){
                          if((m+1)==correct){
                             color1 = '#2EC8CD';
                             iscorrect = 'Respuesta correcta';
                          }else{
                             color1 = colours2[m]; 
                             iscorrect = '';
                          }
                          graph2.push(['Opción '+(m+1).toString(), pregArray[m],'color: '+color1, iscorrect]);
                       }


                          
                       var data1 = google.visualization.arrayToDataTable(graph2);
                       var options1 = {
                         title: 'Pregunta '+ (i+1).toString(),
                         legend: 'none',
                         colors: ['#218B8E', '#7BB9CD'],
                         hAxis: {
                           title: 'Opciones de respuesta',

                         },
                         vAxis: {
                           title: 'Frecuencia',
                             viewWindowMode:'explicit',
                        
                         }
                       };
                       var ans = '';
                       for (x=0;x<opcionesC[i].length;x++) {
                          ans = ans + (x+1).toString() + '. ' + (opcionesC[i])[x];
                       }
                       var container = document.getElementById('chart_div'+(i+2).toString()).appendChild(document.createElement('div'));
                       document.getElementById('p'+(i+2).toString()).innerHTML = 'Pregunta '+(i+1).toString()+': '+preguntasC[i]+ans;
                       document.getElementById('chart_div'+(i+2).toString()).style.width = "1000px";
                       document.getElementById('chart_div'+(i+2).toString()).style.height = "400px";
                       var chart = new google.visualization.ColumnChart(container);

                       chart.draw(data1, options1);
                          
                  }
               }


            });
     // google.charts.load('current', {packages: ['corechart', 'bar']});
     // google.charts.setOnLoadCallback(drawBasic);
            // google.charts.setOnLoadCallback(drawChart);
            // ////console.log(i);
            // function drawChart() {
            //    var data = google.visualization.arrayToDataTable(graph1);
            //    var options = {
            //        title: 'Número de respuestas correctas'
            //    };
            //    document.getElementById('chart_div').style.width = "900px";
            //    document.getElementById('chart_div').style.height = "500px";
            //    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

            //    chart.draw(data, options);
            // }

         }
         //////console.log(idopcion,opcion);
         if(tipo[0]=="p"){  
            var conta = [];
            var contb = [];
               conta = [];
               contb = []; //FALTAN EMPATES Y B2TB T2B
            for(i=0;i<tipo.length;i++){
               for(k=0;k<5;k++){
                  if(pregunta[i]==preguntasP[k]){
                     atributos[k] = atrP[k];
                     for(l=0;l<5;l++){
                        if(opcion[i]==respP[l]){
                           peso = pesosP[l];
                           promAtr[k] = promAtr[k] + peso;
                           counAtr[k]++;
                           ptotal = ptotal + peso;
                           countTotal++;
                           satest.push([idestudiante[i],k,peso]);
                        }
                     }
                  }
               }
            }
             ////console.log(satest);
            //////console.log(counAtr);
            var countA = counAtr;
            var TnB = [0,0,0];
            var TnBt = [0,0,0];
            var tbox = [];
            var urg = [];
            var urgProm = 0;
            for(t=0;t<5;t++){
               TnBt = [0,0,0];
               for(b=0;b<satest.length;b++){
                  if((satest[b])[1]==t){
                     if((satest[b])[2]>3){
                        TnB[0]++;
                        TnBt[0]++;
                     }else if((satest[b])[2]<3){
                        TnB[2]++;
                        TnBt[2]++;
                     }else{
                        TnB[1]++;
                        TnBt[1]++;
                     }
                  }
               }
               tbox.push(TnBt);
               if(TnBt[0]==0){
                  urg.push(TnBt[2]/(tbox[0]+tbox[1]+tbox[2]));
               }else{
                  urg.push(TnBt[2]/TnBt[0]);
               }
            }
            console.log(urg);

            var ide;
            var atr;
            var fcount=0;
            var fila = [0,0,0,0,0,0,0];
            var countF = [0,0,0,0,0,0,0];
            var ide=(satest[0])[0];
             function Comparator(a, b) {
               if (a[0] < b[0]) return -1;
               if (a[0] > b[0]) return 1;
               return 0;
             }
             ////console.log(satest);
             var  ides = [];
             var filas = [];
             var idx;
            for(i=0;i<satest.length;i++){
               if(ides.indexOf((satest[i])[0])==-1){
                  //satisf.push(fila);
                  ides.push((satest[i])[0]);
                  fila[0]=(satest[i])[0];
                  fila[(satest[i])[1]+2]=(satest[i])[2];
                  fila[1] = (satest[i])[2];
                  satisf.push(fila);
                  fila = [0,0,0,0,0,0,0];
               }else{
                  indx = ides.indexOf((satest[i])[0]);
                  (satisf[indx])[(satest[i])[1]+2] = (satest[i])[2];
                  (satisf[indx])[1] = (satisf[indx])[1] + (satest[i])[2];
               }

            }  
            var cnt=0; 
            for(w=2;w<7;w++){
               if((satisf[0])[w]!=0){
                  cnt++;
               }
            }
            for(f=0;f<satisf.length;f++){
               (satisf[f])[1] = ((satisf[f])[1])/cnt;
            }
            ////console.log(satisf);
            countF[0]++;
            //fila[1] = fila[1]/fcount;
            fcount = 0;
            //satisf.push(fila);
            ////console.log(satisf);
            ////console.log(satest);
            // ////console.log(satisf);
            var cont = [];
            var cont1 = [];
            var discordancia;
            var concordancia;
            var Taub = [];
            var tauProm = 0;
            var innert = '';
            for(t=2;t<satisf[0].length;t++){
               cont = [];
               cont1 = [];
               discordancia = 0;
               concordancia = 0;
               empatex = 0;
               empatey = 0;
               for(f=0;f<satisf.length;f++){
                  if(cont.indexOf([(satisf[f])[1],(satisf[f])[t]]!=-1)){
                     cont.push([(satisf[f])[1],(satisf[f])[t]]);
                     cont1.push(1);
                  }else{
                     cont1[cont.indexOf([(satisf[f])[1],(satisf[f])[t]]!=-1)]++;
                  }
               }
               // ////console.log(cont);
               // ////console.log(cont1);
               for(c=0;c<cont.length-1;c++){
                  for(v=c;v<cont.length;v++){
                     if(((cont[c])[0]<(cont[v])[0] && (cont[c])[1]<(cont[v])[1]) || ((cont[c])[0]>(cont[v])[0] && (cont[c])[1]>(cont[v])[1])){
                        concordancia=concordancia+cont1[c]*cont1[v];
                     }else if((cont[c])[0]==(cont[v])){
                        empatex = empatex + cont1[c]*cont1[v];
                     }else if((cont[c])[1]==(cont[v])[1]){
                        empatey = empatey + cont1[c]*cont1[v];
                     }else{
                        discordancia=discordancia+cont1[c]*cont1[v];
                     }
                  }
               }
               tao = (concordancia - discordancia)/Math.sqrt((concordancia+discordancia+empatex)*(concordancia+discordancia+empatey));   
               if(tao>0){
                  Taub.push(tao);
                  tauProm = tauProm + tao;
               }else{
                  Taub.push(0);
               }
            }
            tauProm = tauProm/Taub.length;
            ////console.log(Taub, tauProm);

            // var cb1 = 1;
            // var cb2 = satisf.length-2;
            // for(n=1;n<satisf.length+1;n++){
            //    cb1 = cb1*n;
            //    if((cb2-n)!=0) cb2 = cb2*(cb2-n);
            // }
            // cb2 = cb2*2;
            // var cb = cb1/cb2;
            // var x = []; 
            // var y =[]; 
            // var g = [];
            // fila = [0,0,0,0,0,0,0];

            // for(i=0;i<satisf.length;i++){
            //    if(g.indexOf((satisf[i])[1])==-1){
            //       g.push((satisf[i])[1]);
            //    }
            // }
            // for(k=0;k<5;k++){
            //    y=[];
            //    for(i=0;i<satisf.length;i++){
            //       if(fila.indexOf((satisf[i])[2+k])==-1){
            //          y.push((satisf[i])[2+k]);          
            //       }
            //    }
            //    for(gi=0;gi<g.length;gi++){
            //       for(yi=0;yi.length;yi++){ 
            //          for(s=0;s<satisf.length;s++){
            //             // while([(satisf[s])[1], (satisf[s])[k]]==[g[gi],y[yi]])
            //          }
            //       }
            //    }
            // }
            //console.log(satisf);
            graph3 = [];
            graph3.push(['Atributo', 'Factor de Importancia (FI)', { role: 'style' },{ role: 'annotation' }]);
            urg2 = []; Taub2 = [];
            urgProm = 0;
            taubProm = 0;
            atri = [];
            for(i=0;i<5;i++){
               if(promAtr[i]>0){
                  urg2.push(urg[i]);
                  Taub2.push(Taub[i]);
                  urgProm = urgProm + urg[i];
                  taubProm = taubProm + Taub[i];
                  atri.push(atrP[i]);
               }
            }
            //urgProm = urgProm/(urg2.length);
            urg3 = urg2.sort();
            for(d=0;d<urg3.length;d++){
               if(((urg3.length-1)-d)==d){
                  urgProm = urg3[d];
               }else if(d==(urg3.length)/2){
                  urgProm = (urg3[d]+urg3[d-1])/2;
               }
            }
            taubProm = taubProm/(Taub2.length);
            ////console.log(urgProm,taubProm);
            var estilo;
            ////console.log(urg2,urgProm);
            ////console.log(Taub2,taubProm);
            console.log(Taub2,taubProm);
            console.log(urg2,urgProm);
            for(i=0;i<urg2.length;i++){
               if(Taub2[i]>=taubProm && urg[i]>=urgProm){
                  estilo = 'point { size: 18; shape-type: circle;fill-color: #E27032; }';
                  ann = 'Alta Importancia y Urgencia';//\n este aspecto necesita ser mejorado para obtener una mejor percepción.
               }else if(Taub2[i]>=taubProm && urg[i]<urgProm){
                  estilo = 'point { size: 18; shape-type: circle; fill-color: #186FFE; }';
                  ann = 'Alta Importancia y Baja Urgencia';//Este aspecto debe mantenerse pues es de gran importancia para lograr una percepción positiva.
               }else if(Taub2[i]<taubProm && urg[i]>=urgProm){
                  estilo = 'point { size: 18; shape-type: circle; fill-color: #760EE5; }';
                  ann = 'Baja Importancia y Alta Urgencia';//Debe mejorar este aspecto, pero este no es de gran importancia para lograr una percepción positiva.
               }else{
                  estilo = 'point { size: 18; shape-type: circle; fill-color: #284DC0; }';
                  ann = 'Baja Importancia y Baja Urgencia';//Debe mantener este aspecto, pero este no es de gran importancia para lograr una percepción positiva. 

               }
               graph3.push([atri[i],Taub2[i],estilo,ann]);
            }
            ////console.log(graph3);
            document.getElementById('p4').innerHTML = '<br>Alta Importancia y Urgencia: Este aspecto necesita ser mejorado para obtener una mejor percepción.</br> Alta Importancia y Baja Urgencia: Este aspecto debe mantenerse pues es de gran importancia para lograr una percepción positiva. <br> Baja Importancia y Alta Urgencia: Debe mejorar este aspecto, pero este no es de gran importancia para lograr una percepción positiva.</br>Baja Importancia y Baja Urgencia: Debe mantener este aspecto, pero es posible que este no sea de gran importancia para lograr una percepción positiva.';


            ptotal = ptotal/countTotal;
            graph1.push(['Atributo', 'Promedio de Satisfacción', { role: 'style' }]);
            graph2.push(['Atributo', 'Percepción Negativa (B2B)', 'Neutro', 'Percepción Positiva (T2B)', { role: 'annotation' }]);
            graph2.push(['General', TnB[2], TnB[1], TnB[0], '']); 
            graph1.push(['General',ptotal,'color: #218B8E; stroke-width: 0.5']);
            for(i=0;i<5;i++){
               if(promAtr[i]>0){  
                     graph1.push([atrP[i],promAtr[i]/counAtr[i],'color: #7BB9CD; stroke-width: 0.5']);  
                     graph2.push([atrP[i], (tbox[i])[2], (tbox[i])[1], (tbox[i])[0], '']); 
               innert = innert + 'Pregunta de '+atrP[i]+': '+preguntasP[i]+'</br>';  
               }
               
            } 
            document.getElementById('p11').innerHTML = innert;
         google.charts.load('current', {
               packages: ['corechart', 'bar'],
               callback: function(){
           var options3 = {
             title: 'Desempeño de los Atributos',
             pointSize: 7,
           };
            document.getElementById('chart_div3').style.width = "900px";
            document.getElementById('chart_div3').style.height = "500px";
            var chart3 = new google.visualization.LineChart(document.getElementById('chart_div3'));
            var data3 = google.visualization.arrayToDataTable(graph3);
            chart3.draw(data3, options3);

                  var data = google.visualization.arrayToDataTable(graph1);

                  var options = {
                  title: 'Promedio de Satisfacción',
                  colors: ['#218B8E', '#7BB9CD'],

                  hAxis: {
                   title: 'Atributo',

                  },
                  vAxis: {
                     title: 'Valoración',
                     viewWindowMode:'explicit',
                     viewWindow: {
                       max:5,
                       min:0
                     },
                  // title: 'Pesos',
                   colors: ['#218B8E', '#7BB9CD']
                  }
                  };
                  document.getElementById('chart_div').style.width = "900px";
                  document.getElementById('chart_div').style.height = "500px";
                  var chart = new google.visualization.ColumnChart(
                  document.getElementById('chart_div'));

                  chart.draw(data, options);

                  var data2 = google.visualization.arrayToDataTable(graph2);
                  var options2 = {
                    title: 'Calificaciones de Percepción positiva (T2B): calificaciones con valores mayor a 3. \n Neutro: calificación igual a 3. \n Calificaciones de Percepción negativa (B2B):  valores menores a 3 \n ',
                    isStacked: 'percent',
                    colors: ['#EC5056', '#CFCFCF', '#218B8E'],
                    legend: { position: 'top', maxLines: 3 },
                    bar: { groupWidth: '75%' },
                  };
                  document.getElementById('chart_div2').style.width = "900px";
                  document.getElementById('chart_div2').style.height = "500px";
                  var chart2 = new google.visualization.ColumnChart(
                  document.getElementById('chart_div2'));

                  chart2.draw(data2, options2);
               }
            });
         //google.charts.setOnLoadCallback(drawBasic);
         }

         // function drawBasic() {

         //        var data = google.visualization.arrayToDataTable(graph1);

         //       var options = {
         //         title: 'Promedio de Satisfacción',
         //         colors: ['#218B8E', '#7BB9CD'],
         //         legend: 'none',
         //         hAxis: {
         //           title: 'Atributo',

         //         },
         //         vAxis: {
         //           title: 'Pesos',
         //             viewWindowMode:'explicit',
         //             viewWindow: {
         //               max:5,
         //               min:0
         //             }
         //         }
         //       };
         //       document.getElementById('chart_div').style.width = "900px";
         //       document.getElementById('chart_div').style.height = "500px";
         //       var chart = new google.visualization.ColumnChart(
         //         document.getElementById('chart_div'));

         //       chart.draw(data, options);
         //      // document.getElementById('p1')innerHTML.append();
         //       // var chart2 = new google.visualization.ColumnChart(
         //       //   document.getElementById('chart_div2'));

         //       // chart2.draw(data, options);
         //     }
      }
   </script>

</body>

</html>
