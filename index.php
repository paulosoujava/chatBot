<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="css/main.css" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <body>


     <!-- CONTENT WITH HEADER  -->
       <nav class="nav-extended blue">
         <div class="nav-wrapper">
           <a href="#" class="brand-logo" style="padding:5px">FlorianóBots</a>
           <!-- OTHERS MENUS -->
           <!-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
             <li><a href="sass.html">Sass</a></li>
             <li><a href="badges.html">Components</a></li>
             <li><a href="collapsible.html">JavaScript</a></li>
           </ul> -->
           <!-- MOBILE -->
           <!-- <ul class="side-nav" id="mobile-demo">
             <li><a href="sass.html">Sass</a></li>
             <li><a href="badges.html">Components</a></li>
             <li><a href="collapsible.html">JavaScript</a></li>
           </ul> -->
         </div>
         <div class="nav-content">
           <ul class="tabs tabs-transparent">
             <li class="tab"><a class="active"  href="#frm_calc_cid">Cálculo de juros</a></li>
             <li class="tab disabled"><a href="#test2">&nbsp;</a></li>
             <li class="tab disabled"><a href="#test3">&nbsp;</a></li>
             <li class="tab disabled"><a href="#test4">&nbsp;</a></li>
          </ul>
       </div>
     </nav>
      <!-- CONTENT -->
      <!-- FORM CALCULADORA -->
        <div id="frm_calc_cid" class="col s12" >
            <div class="content" >
                  <div class="row">
                     <h2 class="left flow-text" id="titulo_home">Cálculo de juros</h2><br />
                     <a href="#" data-activates="slide-out" class=" right btn button-collapse">
                        <i class="material-icons">menu</i>
                          Posso Ajudar?
                       </a>
                  </div>
                  <!-- FORM -->
                    <div class="card blue-white darken-1">
                     <div class="card-content black-text">
                      <div class="row">
                        <form class="col s12">
                           <div class="row">
                             <div class="input-field col s6">
                               <input placeholder="Digite os meses" id="num_meses" type="number" class="validate">
                               <label for="num_meses">Número de Meses</label>
                             </div>
                             <div class="input-field col s6">
                               <input placeholder="Digite a Taxa de juros mensal" id="tx_juros" type="number" class="validate">
                               <label for="tx_juros">Taxa de juros mensal 	</label>
                             </div>
                          </div>

                          <div class="row">
                            <div class="input-field col s6">
                              <input placeholder="(depósito realizado no início do mês) " id="valor_dep" type="number" class="validate">
                              <label for="valor_dep">Valor do depósito regular</label>
                            </div>
                            <div class="input-field col s6">
                              <input placeholder="Valor obtido ao final" id="valor_final" type="number" class="validate">
                              <label for="tx_juros">Valor obtido ao final	</label>
                            </div>
                         </div>
                         <div class="row">
                           <a class="waves-effect waves-light btn right">Calcular</a>
                         </div>
                      </div>
                    </div>
                  </div>
                  <!-- # FORM -->

                  <!-- SECTION -->
                  <div class="row">

                    <div class="col s4">
                      <div class="row">
                             <div class="col s12 m12">
                               <div class="card blue-grey darken-1">
                                 <div class="card-content white-text">
                                   <span class="card-title">Card Title</span>
                                   <p>I am a very simple card. I am good at containing small bits of information.
                                   I am convenient because I require little markup to use effectively.</p>
                                 </div>
                                 <div class="card-action">
                                   <a href="#">This is a link</a>
                                   <a href="#">This is a link</a>
                                 </div>
                               </div>
                             </div>
                      </div>
                    </div>
                    <div class="col s4">
                      <div class="row">
                             <div class="col s12 m12">
                               <div class="card blue-grey darken-1">
                                 <div class="card-content white-text">
                                   <span class="card-title">Card Title</span>
                                   <p>I am a very simple card. I am good at containing small bits of information.
                                   I am convenient because I require little markup to use effectively.</p>
                                 </div>
                                 <div class="card-action">
                                   <a href="#">This is a link</a>
                                   <a href="#">This is a link</a>
                                 </div>
                               </div>
                             </div>
                      </div>
                    </div>
                    <div class="col s4">
                      <div class="row">
                             <div class="col s12 m12">
                               <div class="card blue-grey darken-1">
                                 <div class="card-content white-text">
                                   <span class="card-title">Card Title</span>
                                   <p>I am a very simple card. I am good at containing small bits of information.
                                   I am convenient because I require little markup to use effectively.</p>
                                 </div>
                                 <div class="card-action">
                                   <a href="#">This is a link</a>
                                   <a href="#">This is a link</a>
                                 </div>
                               </div>
                             </div>
                      </div>
                    </div>

                  </div>
                  <!--# SECTION -->
            </div>
        </div>

      <!-- #CONTENT -->

    <!-- ROBO -->
    <ul id="slide-out" class="side-nav">
      <li style="height:600px">
      <div class="row">
        <div class="content" >
          <div class="left chip gray black-text" style="padding-left:8px;">
                Ola, tudo bem?
          </div><br />
          <div class="right chip blue white-text" style="padding-right:8px">
                Ola, tudo bem sim
          </div>
          <div class="left chip gray black-text" style="padding-left:8px;">
                Que bom, em que posso lhe ajudar?
          </div><br />
          <div class="right chip blue white-text" style="padding-right:8px">
                Preciso de grana
          </div>
        </div>

      </div>

    </li>
      <li><div class="divider"></div></li>
      <li>
        <div class="row">
         <form class="col s12">
           <div class="row">
             <div class="input-field col s12">

               <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
               <label for="icon_prefix2">Escreva aqui</label>
             </div>
           </div>
         </form>
       </div>
    </li>
    </ul>
    <!-- # ROBO -->

  <!-- ABOUT US -->
  <!-- Element Showed -->
  <a id="btnAboutUs" onclick="$('.tap-target').tapTarget('open')" class="waves-effect waves-light  blue btn btn-floating right" ><i class="material-icons">info_outline</i></a>
  <!-- Tap Target Structure -->
  <div class="tap-target blue" data-activates="btnAboutUs">
    <div class="tap-target-content">

      <p  style="padding-left:50px; color:white">
        Desenvolvedores<br />
        Aline Estevo da Silva<br />
        Eli Lopes da Silva<br />
        Fabiano Castro Monteiro<br />
        Gustavo Felipe Scheneider<br />
        Luciano José Kogut<br />
        Paulo Jorge de Oliveira<br />
      Wladmir Duarte Gomes<br />
    </p>
    </div>
  </div>


     <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript" src="js/init.js"></script>
   </body>
 </html>
