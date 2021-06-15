<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>

    <!------------------------------------------- BootStrap File ------------------------------------------->
    <!-- <link href="Preprocessors/bootstrap-4.5.3/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet"> -->
    <!-- <link href="Preprocessors/bootstrap-4.5.3/dist/css/bootstrap.css" type="text/css" rel="stylesheet"> -->
    <!------------------------------------------- Font-Awesome File ------------------------------------------->
    <!-- <link href="Preprocessors/fontawesome-pro-5.13.0-web/css/all.min.css" type="text/css" rel="stylesheet"> -->
    <!-- <link href="Preprocessors/fontawesome-pro-5.13.0-web/css/all.css" type="text/css" rel="stylesheet"> -->
    <!------------------------------------------- Ion-Icons File ------------------------------------------->
    <!-- <link href="Preprocessors/ionicons-2.0.1/css/ionicons.css" type="text/css" rel="stylesheet"> -->
    <!-- <link href="Preprocessors/ionicons-2.0.1/css/ionicons.min.css" type="text/css" rel="stylesheet"> -->
    <!------------------------------------------- CSS File ------------------------------------------->
    <link href="css/index.css" type="text/css" rel="stylesheet">
    <!------------------------------------------- CDN's ---------------------------------------------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!------------------------------------------------------------------------------------------------------>

</head>
<body style="font-family: 'Make It Sans IS24 Web',Verdana,'DejaVu Sans',Arial,Helvetica,sans-serif; color: #333;     background-color: #fff;  overflow-x: hidden;">

<!-------------------------- Navbar -------------------------->
<section id="NAVBAR">
    <div class="parent1">
        <div class="child1-1">
            <img style="width: 116px; margin-top: 9%;" class="img-fluid" src="images/immoscout24.svg" alt=""> 
        </div>
        <div id="logoSubMenuChild" class="child1-2">
            <p id="logoSubMenu" class="text-center custom">Verkaufen <span id="logoSubMenuSpan"class="fas fa-angle-down"></span></p>
        </div>
        <div class="child1-3">

        </div>
        <div class="child1-4 custom" >
            <p id="navBtn" class="text-center custom"><button id="navButton" class="custom">Eigentümerbereich</button></p>
        </div>
        <div class="child1-5">
            <p id="accMenu" class="text-center"><span id="accMenuPic" class="far fa-user" style=" font-weight: 200;"></span><span id="accMenuArrow" class="fas fa-angle-down " style=" font-weight: 200;"></span></p>
        </div>
        
    </div>
    <!-- <p class="text-center preMainText">Neu für Wohnimmobilien: Kostenloses Bewertungs-PDF</p>   -->
    <hr id="navEndLine">

</section>

<!-- <i class="fal fa-horizontal-rule logoSubMenuBarHide"></i>
<i class="fal fa-horizontal-rule accMenuBarHide"></i> -->
<!-------------------------- End Navbar -------------------------->



<!-------------------------- Hover Menus -------------------------->
<div class="logoHoverMenuHide">
    <div class="parent2">
        <div class="child2-1">
            <ul>
                <li class="mainLinks">Jetzt loslegen</li>
                <li><a href="#">Immobilie bewerten</a></li>
                <li><a href="#">Immobilie inserieren</a></li>
                <li><a href="#">Immobilie diskret verkaufen</a></li>
                <li><a href="#">Maklerenofehlungen erhalten</a></li>
                <li><a href="#">Makler selbst fiden</a></li>
            </ul>
        </div>
        <div class="child2-2">
            <ul>
                <li class="mainLinks">Für Eigentümer</li>
                <li><a href="#">Preisatlas</a></li>
                <li><a href="#">Haus verkaufen Laitfaden</a></li>
                <li><a href="#">Alle Antworten auf lhre Fragen</a></li>
                <li><a href="#">Neu: Ihr Eigentümerbereich</a></li>
            </ul>
        </div>
        <div class="child2-3">
            <ul>
                <li class="mainLinks">Für Immobilien-Profis</li>
                <li><a href="#">Produktwelt $ Tipps</a></li>
                <li><a href="#">Der neue Provisionssplit</a></li>
                <li><a href="#">Branchenbuch</a></li>
                <li><a href="#">Kunde werden</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="accHoverMenuHide">
    <p class="text-center mainText">Persönliche Services nutzen und schneller ans Ziel kommen.</p>
    <p class="text-center"><button id="registerenButton">Anmelden/Registeren</button></p>
    <div class="parent3">
        <div class="child3 Suchender">Suchender</div>
        <div class="child3 Anbieter">Anbieter</div>
    </div>
    <ul id="dynamicLinks">
    </ul>
</div>
<!-------------------------- End Hover Menus -------------------------->



<!-------------------------- Main Page -------------------------->

<center><h1 class="text-center mainTextMP">Ermitteln Sie kostenlos den Wert Ihrer Immobilie!</h1></center>
<section id="mydivon" style="display:block">
<p class="text-center mainTextDesMP">Welche Immobilie möchten Sie bewerten?​</p>
<center>
<div class="parent4 text-center d-dispaly">
    <div class="child4">
        <!-- <p class="text-center iconsMP"><i class="fas fa-house"></i></p> -->
        <img style="width: 38px; margin-bottom: 7%; margin-top: 15%;" class="img-fluid hideImg" src="images/1.png">
        <p class="text-center"><a href="#"><button class="buttonMP" onmousedown="toggleDiv('mydiv');">Haus</button></a></p>
    </div>
    <div class="child4">
        <!-- <p class="text-center iconsMP"><i class="fas fa-house"></i></p> -->
        <img style="width: 38px; margin-bottom: 7%; margin-top: 15%;" class="img-fluid hideImg" src="images/2.png">
        <p class="text-center"><a href="#"><button class="buttonMP" onmousedown="toggleDiv('mydiv');">Wohnung</button></a></p>
    </div>
    <div class="child4">
        <!-- <p class="text-center iconsMP"><i class="fas fa-house"></i></p> -->
        <img style="width: 38px; margin-bottom: 7%; margin-top: 15%;"  class="img-fluid hideImg"src="images/3.png">
        <p class="text-center"><a href="#"><button class="buttonMP" onmousedown="toggleDiv('mydiv');">Grundstück</button></a></p>
    </div>
    <div class="child4">
        <!-- <p class="text-center iconsMP"><i class="fas fa-house"></i></p> -->
        <img style="width: 38px; margin-bottom: 7%; margin-top: 15%;" class="img-fluid hideImg" src="images/4.png">
        <p class="text-center"><a href="#"><button class="buttonMP" onmousedown="toggleDiv('mydiv');"> Gewerbe</button></a></p>
    </div>
</div> 

<div class="parent4 text-center ddisplay" style="display: none;">
    
    <table>
        <tr>
            <td><div class="child4">
                <!-- <p class="text-center iconsMP"><i class="fas fa-house"></i></p> -->
                <img style="width: 38px; margin-bottom: 7%; margin-top: 15%;" class="img-fluid hideImg" src="images/1.png">
                <p class="text-center"><a href="#"><button class="buttonMP" onmousedown="toggleDiv('mydiv');">Haus</button></a></p>
            </div></td>
            <td><div class="child4">
                <!-- <p class="text-center iconsMP"><i class="fas fa-house"></i></p> -->
                <img style="width: 38px; margin-bottom: 7%; margin-top: 15%;" class="img-fluid hideImg" src="images/2.png">
                <p class="text-center"><a href="#"><button class="buttonMP" onmousedown="toggleDiv('mydiv');">Wohnung</button></a></p>
            </div></td>
        </tr>
        <tr>
            <td>   <div class="child4">
                <!-- <p class="text-center iconsMP"><i class="fas fa-house"></i></p> -->
                <img style="width: 38px; margin-bottom: 7%; margin-top: 15%;"  class="img-fluid hideImg"src="images/3.png">
                <p class="text-center"><a href="#"><button class="buttonMP" onmousedown="toggleDiv('mydiv');">Grundstück</button></a></p>
            </div></td>
            <td><div class="child4">
                <!-- <p class="text-center iconsMP"><i class="fas fa-house"></i></p> -->
                <img style="width: 38px; margin-bottom: 7%; margin-top: 15%;" class="img-fluid hideImg" src="images/4.png">
                <p class="text-center"><a href="#"><button class="buttonMP" onmousedown="toggleDiv('mydiv');"> Gewerbe</button></a></p>
            </div></td>
        </tr>
    </table>
    
</div> 
</center>
</section>
<!-- <------        multistep form           ------>

 <div class="container-fluid" id="mydivoff" style="display:none">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-8 col-lg-8 col-xl-8  p-0 mt-3 mb-2">
            <div class="card px-0  pb-0 mt-3 mb-3"> 
                
                <form id="msform">
                    <!-- progressbar -->
                   
                    <div class="progress" style="height:0.4rem;" >
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="background-color: rgb(0, 178, 169);"  role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                     <br>
                     <!-- fieldsets -->
                    <fieldset>
                        <!-- <div class="form-card"> -->
                            <div class="row">
                                <div class="col-md-12 text-center">
                                <p style="font-weight: 100; font-size:23px;margin-top:10px;margin-bottom:40px">In welcher Region befindet sich die Immobilie?</p>
                                </div>
                            </div>
                 
                            <!-- <div class=""> -->
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4 px-md-4  col-sm-12 tab1-wrapper" >
                                
                                
                                <label  style="font-weight: 700; font-size:14px ;">PLZ der Immobilie</label> <br>
                                <input type="text" class="bz btns" style="width: 100% !important" name="bz" placeholder="B.z.1405" required /> 
                            <div class="mt-3">&nbsp;</div>
                            
                                <!-- </div> -->
                            <!-- </div>  -->
                            </div>
                            </div> 
                         <div class="col-md-12 text-center next px-4">
                             
                         <input type="button" style="margin-top:20px" name="next" class="nbtn next action-button" value="Weiter" />
                         </div>
                      
                        
                        
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12 text-center">
                               <p style="font-size: 23px; margin-top:5px;margin-bottom:40px">Wie groß sind Wohn- und Grundstücksfläche?</p>
                            </div>
                            </div>
                            <div class="row"><div class="col-md-12 form-wrapper" style="display: flex;">

                                <div class="col-md-6 slider-wrapper" style="padding-left: 20px;padding-right: 20px;">
                                    <div class="col-md-12"style="height: 20px; text-align: left;">
                                        <label class="fieldlabels pad">Wohnfläche</label>
                                    </div>
                                    <div class="col-md-12"style="height: 20px;" >
                                        <input style="width: 100%; padding: 0px;" class="sslider pad" type="range" min="10" max="1000" value="180" name="range" placeholder="First Name" id="myRange" step="10"/>
                                    </div>
                                    <div class="col-md-12 col-xs-12 col-sm-12 label-wrapper1" style="display: flex;">
                                    <div class="col-md-6 col-xs-6 col-sm-6" style="text-align: left;">
                                        <label class="fieldlabels pad">20m<sup>2</sup></label>
                                    </div>
                                    <div class="col-md-6 col-xs-6 col-sm-6 second-label"style="text-align: right;">
                                        <label class="fieldlabels pad ">1000m<sup>2</sup></label>
                                    </div>
                                  </div>
                                </div>
                                  <div class="col-md-6" style="padding-left: 20px;padding-right: 20px;">
                                    <div class="col-md-12" style="height: 20px; text-align: left;" >
                                        <label class="fieldlabels pad">Grundstücksfläche</label>
                                    </div>
                                    <div class="col-md-12" style="height: 20px;">
                                        <input style="width:100%; padding: 0px;" class="sslider pad" type="range" min="20" max="5000" value="800" name="range" placeholder="First Name " id="myRange2" step="10" />
                                    </div>
                                        <div class="col-md-12 col-xs-12 col-sm-12 label-wrapper2" style="display: flex;">
                                        <div class="col-md-6  col-xs-6 col-sm-6"style="text-align: left;">  
                                            <label class="fieldlabels pad">20m<sup>2</sup></label>
                                        </div>
                                        <div class="col-md-6 col-xs-6 col-sm-6 second-label"style="text-align: right;"> 
                                             <label class="fieldlabels pad">5000m<sup>2</sup></label>
                                            </div>
                                    
                                </div> 
                                </div></div>
                              <div class="col-md-12" style="display: flex; margin-top: 1%; ">
                            <div class="col-md-6"  style="display: flex;">
                            <div class="col-md-6" style="padding-left: 20%;">
                                <label class="fieldlabels padd1" style=" padding-top: 10px;">oder eingeben:</label></div>
                                <div class="col-md-6">
                                 <input type="text" style="margin-right: 2% ;    width: 75%;"  name="number" class="padd1" value="180              m²" placeholder="" id="demo" />
                                </div></div>
                                <div class="col-md-6"  style="display: flex;">
                                 <div class="col-md-6" style="padding-left: 20%;"> 
                                    <label class="fieldlabels pad1 padd1" style=" padding-top: 10px; ">oder eingeben:</label> </div>
                                    <div class="col-md-6"><input type="text" style="      width: 75%; margin-left: 0% ;padding-bottom: 1% ;"  name="number" class="padd1" value="800             m²" placeholder="" id="demo2" /> 
                             </div></div></div>

                        </div> </div><br>
                        <div class="col-md-12 text-center next px-4"><input type="button" name="next" style="margin-left: 0%;" class="nbtn next action-button pad1" value="Weiter" /> </div>
    
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                            <div class="col-12 text-center">
                               <p style="font-size: 23px;  margin-top:10px ;   margin-bottom: 0rem;">Wie viele Zimmer hat die Immobilie?</p>​
                               <span style="font-size: 18px; ">(ohne Küche und Bad)</span>
                            </div>
                            </div> 
                            <div class="container">
                            
<div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                  
                           
       
                                <div class="col-lg-5 offset-lg-4 col-md-8 offset-md-3 col-sm-6 offset-sm-3 col-sm-10 offset-sm-2   px-md-4 div-wrapper" style="margin-top: 35px;" >
                                <label>Zimmer</label>
                         
               
                         <br>
          <div class="col-md-12"style="padding:0px" >
                                    <button type="button" class="btn btn-outline-secondary btn-number " style="border-top-right-radius: 0px;border-bottom-right-radius: 0px;  border-right: 0px;border-top-left-radius: 5px;border-bottom-left-radius: 5px;" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <i class="fa fa-minus"></i>
                                    </button>
             
                                <input type="text" name="quant[1]"  style="border-radius:0;margin-inline: -5px !important;padding: 5px 15px 7px 15px;margin-top:0%;width:40%;border:#6c757d solid 1px" class="input-number" value="1" min="1" max="100">
              
                                    <button type="button"  style=" border-top-right-radius: 5px;border-bottom-right-radius: 5px;  border-top-left-radius: 0px;border-bottom-left-radius: 0px;"class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[1]">
                                        <i class="fa fa-plus"></i>
                                    </button>
        
                          
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>






                        </div> <br>
                        <div class="col-md-12 text-center next px-4" style="margin-top: 25px;">
                        <input type="button" name="next" style="float: center; " class="nbtn next action-button" value="Weiter" /> 
                        </div>
                        <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
                    </fieldset>
                    
                    <fieldset class="text-center">
                        <div class="form-card ">
                            <div class="row">
                                <div class="col-12 text-center">
                               <p style="font-size: 23px; margin-top:10px;margin-bottom:40px">Für welches Thema interessieren Sie sich?</p>
                               </div>
                            </div> 
                            
                        </div> 
                        <input type="button"  name="next" class="btns next  link-11" value="Verkauf" /><br>
                            <input type="button"  name="next" class="btns next  link-11" value="Kauf" /><br>
                            <input type="button"  name="next" class="btns next  link-11" value="Vermietung" /><br>
                            <input type="button"  name="next" class="btns next   link-11" value="Miete" />
                    </fieldset>
                    <fieldset class="text-center">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12 text-center" >
                                <p style="font-size: 23px; margin-bottom:0px" >Könnte ein Verkauf mit Makler</p><span style="font-size: 18px; ">für Sie in Frage kommen?</span>
                                <p style="margin-top:10px;margin-bottom:10px"><a href="#">Ihre Vorteile</a></p>
                                </div>
                               
                            </div> 
                            
                        </div> 
                        <input type="button"  name="next" class="btns next gif-btn  link-11" value="Ja" /><br>
                            <input type="button"  name="next" class="btns next gif-btn link-11" value="Vielleicht" /><br>

                            <input type="button"  name="next" class="btns next  gif-btn link-11" value="Nein" />
                            <p style="margin-top:30px;margin-bottom:30px;">Wir finanzieren diesen Service über die Provision unserer 
        </p>
                    </fieldset>

          

                    <fieldset class="text-center gif">
                    <p id="heading2" style="font-size: 23px; ">
Passende Makler in lhrer Region werden gesucht...</p>
<img src="./images/gif.svg" id="image" width="90" height="90" alt="">
<div class="col-md-12 col-sm-12 col-xs-12 "id="text-areas">
<div class="col-md-6 col-sm-10 col-xs-10 offset-sm-2 offset-xs-2 offset-md-4 d-flex wrapper">
<div class="col-md-6 col-sm-6 col-xs-6 text-left">
<p>Datencheck</p>
<p>Standortcheck</p>
<p>Bewertung</p>
</div>
<div class="col-md-6 col-sm-6 col-xs-6 text-left">
<p id="text">...</p>
<p id="text2">...</p>
<p id="text3">...</p>
</div>
</div>

</div>
                    </fieldset>

                    <fieldset class="text-center">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12 text-center" >
                                <p >Könnte ein Verkauf mit Makler<br>für Sie in Frage kommen?</p>
                                </div>
                               
                            </div> 
                            
                        </div> 
                        <input type="button"  name="next" class="btns next gif-btn  link-11" value="Ja" /><br>
                            <input type="button"  name="next" class="btns next gif-btn link-11" value="Vielleicht" /><br>

                            <input type="button"  name="next" class="btns next  gif-btn link-11" value="Nein" />
                    </fieldset>                    
                    <fieldset class="text-center">
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12 text-center" >
                                <p >Könnte ein Verkauf mit Makler<br>für Sie in Frage kommen?</p>
                                </div>
                               
                            </div> 
                            
                        </div> 
                        <input type="button"  name="next" class="btns next gif-btn  link-11" value="Ja" /><br>
                            <input type="button"  name="next" class="btns next gif-btn link-11" value="Vielleicht" /><br>

                            <input type="button"  name="next" class="btns next  gif-btn link-11" value="Nein" />
                    </fieldset>                  

                    <div id="form" style="display:none">

               
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12 text-center">
                                <p id="last-header" style="font-size: 23px; ">✔ Passende Makler gefunden</p>
                                <b>Wer soll die Empfehlungen erhalten?</b>
                                </div>
                            </div>
                            <div style="text-align: left; margin-left: 3%;"> 

                                <label><b>Anrede</b></label>

                                <label class="radio-label">Herr
  <input type="radio" checked="checked" name="gender" value="male">
  <span class="checkmark"></span>
</label>
<label class="radio-label">Frau
  <input type="radio" checked="checked" name="gender" value="female">
  <span class="checkmark"></span>
</label>
                              <br> 
                            <input type="text" style="width: 43% !important; margin: 5%; margin-bottom: 0px; margin-right:0px ; float: left;" name="email" class="form-control from-11" placeholder="BVorname" required />
                            <input type="text" style="width: 43% !important; margin: 5%; margin-bottom: 0px; margin-left: 0px; float: right;" name="email"class="form-control from-11" placeholder="VornameVorname"  required/>
                            <input type="text" style="width: 43%; margin: 5%; float: left; margin-right: 0px; margin-bottom: 0px;" name="email" class="form-control from-11" placeholder="Telefonnummer"  required/>
                            
                            
                            
                            
                            
                            <input type="text" style="width: 43%; margin: 5%; margin-left: 0px; float: right;" name="email"class="form-control from-11" placeholder="Ihre E-Mail-Adresse"  required/>
                           <br>
                            
                            
                            <div class="from-11"> 
                                <label style="font-size: x-small;" class="">Zur Erstellung personalisierter Angebote wird ImmoScout24 Ihre Daten wie im <span class="link" style="cursor: pointer;">Hinweis Immobilienbewertung</span> beschrieben nutzen.</div>
                                <label for=""style="font-size:small" > <input type="checkbox" style="width: 10px; margin-bottom: 0px;"id="" name="" value="Bike">&nbsp;&nbsp; Ich möchte auf mich zugeschnittene Angebote und Neuigkeiten der Immobilien Scout GmbH per E-Mail erhalten. Abmelden geht jederzeit. Weitere Informationen</label>
                                </label>
                           
                            <br><br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <input type="button" style="width: 60%;  background-color: #00FFD0;" name="next" class="next sslider1" value="Angebote erhalten" />
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</div> 


<div id="navbar"  style="z-index: 1;    opacity: 1;">
    <p class="stickybar" style="margin-bottom: 0px; padding:10px">Jetzt kostenlose Immobilienbewertung erhalten 
        <button style="padding: 10px;
        background: #01ffcf;
        border: none;
        outline: none;
        border-radius: 10px;
        width: 143px;
     ">Jetzt starten </button></p>
  </div>

<center>
<div class="parent5 ">
    <div class="child5">
        <i style="color:#333; font-weight: 200;" class="fas fa-check"></i><span> Analyse per E-Mail</span>
    </div>
    <div class="child5">
        <i class="fas fa-check" style="color:#333; font-weight: 200;"></i><span> In nur 3 Minuten fertig</span>
    </div>
    <div class="child5">
        <i class="fas fa-check" style="color:#333; font-weight: 200;"></i><span> 100% kostenlos & unverbindlich</span>
    </div>
</div>

<h2 class="text-center mainTextMP1">Wie funktioniert die Online-Immobilienbewertung von ImmoScout24?</h2>

</center>
<div class="container  col-md-12">
    <center>
<div class="parent6 ">
    <div class="child6">
        <h3>1. Sie beschreiben Ihre Immobilie</h3>
        <p>Bereits wenige Angaben zu Ihrer Immobilie genügen</p>
    </div>
    <div class=" child6-1">
       <img class="image " src="images/arrow.png">
        <!-- <i class="fas fa-arrow-right"></i> -->
    </div>
    <div class="child6">
        <h3>2. Wir analysieren Ihr Objekt</h3>
        <p>Wir ermitteln den Wert auf Basis unserer umfangreichen Datenbank.n</p>
    </div>
    <div class=" child6-1">
        <img class="image " src="images/arrow.png">
        <!-- <i class="fas fa-arrow-right"></i> -->
    </div>
    <div class="child6 ">
        <h3>3. Ihre Bewertung per E-Mail</h3>
        <p>Starten Sie auf Wunsch direkt in den Verkauf.</p>
    </div>

</div></center>
<!-------------------------- End Main Page -------------------------->



<!-------------------------- Gallery Page -------------------------->
<div class="parent7">
    <div class="child7">
        <img  class="imgG img-fluid"  style="width: 570px;" src="images/image2.png"  alt="userPic">
    </div>
    <div class="child7">
        <div style="margin-left:0%;">
        <h4 class="galleryHeading">Wie erhalte ich die Immobilienbewertung?</h4>
        <p class="galleryPare">
            Sie erhalten die Marktwert-Einschätzung <b>sofort,</b> nachdem Sie alle relevanten Daten eingegeben haben.
            Ihr umfangreiches Bewertungs-PDF können Sie auf unserer Webseite im Eigentümerbereich herunterladen.
            Zusätzlich bekommen Sie die wichtigsten Informationen per E-Mail.
       <br>  <br><a class="galleryPare" href="#">Beispiel-PDF anzeigen</a>
        </p>
    </div>
    </div>
</div>

<div class="parent7">
    <div class="child7 child-7-1">
        <h4 class="galleryHeading">Was kostet die Immobilienbewertung von ImmoScout24?</h4>
        <p class="galleryPare">
            Nichts. Unser Marktpreis-Check ist für Sie als Immobilieneigentümer:in komplett kostenlos.
            Wir finanzieren unseren Service über eine Provision der Immobilienmakler:innen, falls Sie sich
            für den Verkauf interessieren. Aber keine Sorge: Selbst wenn Sie Maklerempfehlungen von uns erhalten,
            sind diese natürlich unverbindlich.
        </p>
    </div>
    <div class="child7 ">
        <img class="imgG img-fluid" src="images/image3.png" width="546" height="408" alt="userPic">
    </div>
    <div class="child7 child-7-2">
        <h4 class="galleryHeading">Was kostet die Immobilienbewertung von ImmoScout24?</h4>
        <p class="galleryPare">
            Nichts. Unser Marktpreis-Check ist für Sie als Immobilieneigentümer:in komplett kostenlos.
            Wir finanzieren unseren Service über eine Provision der Immobilienmakler:innen, falls Sie sich
            für den Verkauf interessieren. Aber keine Sorge: Selbst wenn Sie Maklerempfehlungen von uns erhalten,
            sind diese natürlich unverbindlich.
        </p>
    </div>
</div>

<div class="parent7">
    <div class="child7">
        <img  class="imgG img-fluid" src="images/image4.png" width="546" height="408" alt="userPic">
    </div>
    <div class="child7">
        <h2 class="galleryHeading">Welche Unterlagen benötige ich für die Immobilienbewertung?</h2>
        <p class="galleryPare">
            Für unseren Immobilienwert-Rechner benötigen Sie nur wenige Angaben und keinerlei Dokumente:
        </p>
        <ul>
            <li style="list-style: disc;">Postleizahl</li>
            <li style="list-style: disc;">Größe & Zimmeranzahl</li>
            <li style="list-style: disc;">Baujahr</li>
            <li style="list-style: disc;">Besondere Ausstattung</li>
        </ul>
    </div>
</div>
<!-------------------------- End Gallery Page -------------------------->




<!-------------------------- Description Page -------------------------->
<h2 id="mainTextDes">Alle Fragen rund um die Immobilienbewertung</h2>
<div class="parent8 "id="container">
    <div class="child8-1" id="sidebar">
        <p class="m"><i class="fal fa-tasks "></i> <span class="">Direkt zum Wunschthema</span></p>
        <p class="points">Ändert sich der Wert meiner Immobilie wegen der Corona-Pandemie?</p>
        <p class="points">Welches Bewertungsverfahren passt zu meiner Immobilie?</p>
        <p class="points">Was ist der Unterschied zwischen Verkehrswert und Kaufpreis?</p>
        <p class="points">Welche Faktoren fließen in die Immobilienbewertung ein?</p>
        <p class="points">Wie bedeutend ist die Lage für die Bewertung?</p>
        <p class="points">Welche Rolle spielt der Zustand einer Immobilie bei der Bewertung?</p>
        <p class="points">Wie wirkt sich die Ausstattung einer Immobilie auf ihren Wert aus?</p>
        <p class="points">Was unterscheidet die kostenlose Immobilienbewertung online von einem Wertgutachten?</p>
    </div>
    <div class="child8-2" id="body-text">
        <h1 class="headingDes">Ändert sich der Wert meiner Immobilie wegen der Corona-Pandemie?</h1>
        <p class="paraDes">Eine Corona-Flaute ist bei den Preisen für Wohnimmobilien nicht zu spüren.
            Im Gegenteil: In fast allen Regionen sind die Preise weiter angestiegen.
            Zuverlässige Prognosen für die Zukunft lassen sich aktuell noch nicht treffen.
            Expert:innen gehen jedoch davon aus, dass die Preise in den Ballungszentren weiterhin ansteigen werden.
            Zudem hat die Nachfrage nach Wohnimmobilien am Rand und im Umland der Großstädte deutlich zugenommen.
            Damit klettern hier auch die Preise. Demgegenüber stagnieren die Finanzierungszinsen nach wie
            vor auf einem sehr niedrigen Niveau. Weitere Informationen zu den Vorhersagen für die Zukunft
            finden Sie <a href="#">hier</a>.</p>

        <h1 class="headingDes">Immobilienwert berechnen: Welches Bewertungsverfahren eignet sich für meine Immobilie?</h1>
        <p class="paraDes">Den Immobilienwert kann man über gibt drei verschiedene Methoden berechnen: Vergleichswert,
            Sachwert und Ertragswert.
            Aber welches der Verfahren wird wann und warum angewendet?</p>
        <h1 class="headingDes">Vergleichswertfahren</h1>
        <p class="paraDes">Wie der Name schon verrät, wird die Immobilie hierbei mit anderen Objekten abgeglichen und so ihr Wert ermittelt.
            Insbesondere die Lage, die Größe, die Bausubstanz, das Zukunftspotenzial und die Nutzungsperspektive
            spielen hierbei eine Rolle. Das <a href="#">Vergleichswertverfahren</a> wird häufig für die Wertermittlung unbebauter
            Grundstücke und Eigentumswohnungen eingesetzt. Eine Grundvoraussetzung für das Verfahren ist,
            dass es eine größere Anzahl vergleichbarer Immobilien gibt.</p>

        <h1 class="headingDes">Ertragswertverfahren</h1>
        <p class="paraDes">Das <a href="#">Ertragswertverfahren </a> wird häufig bei Gewerbeimmobilien oder vermieteten beziehungsweise
            verpachteten Immobilien wie Mietshäusern, Hotels und Restaurants angewendet. Grundlage für die
            Wertermittlung sind nämlich die Erträge, die durch die entsprechende Immobilie erwirtschaftet werden.
            Die Ermittlung des Bodenwerts wird in diesem Fall bei Bedarf getrennt vorgenommen.</p>

        <h1 class="headingDes">Sachwertverfahren</h1>
        <p class="paraDes">Auch beim <a href="#">Sachwertverfahren</a> wird der Wert einer Immobilie getrennt vom Bodenwert ermittelt.
            Drei Komponenten bilden die Grundlage des Sachwerts:</p>
        <ol>
            <li>der Bodenrichtwert, also der Wert des Grundstücks oder Grundstücksanteils</li>
            <li>die Herstellungskosten der baulichen Anlagen, bei privat genutzten Immobilien also des Hauses oder der Wohnung</li>
            <li>die Herstellungskosten der baulichen Außenanlagen, z.B. der Wege oder Garagen</li>
        </ol>
        <p class="paraDes">Das Sachwertverfahren ist eines von den drei Verfahren,
            welche durch die ImmoWertV geregelt werden. Gleichzeitig ist es das einzige, welches sich für
            industriell genutzte oder allgemein genutzte Objekte wie Bahnhöfe eignet. Dennoch kritisieren
            Expert:innen, dass trotz Marktanpassungsfaktor häufig unrealistische Werte ermittelt werden, die
            nicht den tatsächlich erzielbaren Preisen entsprechen.</p>

        <h1 class="headingDes">Was ist der Unterschied zwischen Verkehrswert und Kaufpreis?</h1>
        <p class="paraDes">Für unseren Immobilienwert-Rechner benötigen Sie nur wenige Angaben und keinerlei
            Dokumente:</p>
        <ul>
            <li>Der <a href="#">Verkehrswert</a> beschreibt den aktuellen Wert, den eine Immobilie in etwa erzielen wird. Er wird durch ein Sachwertverfahren, Ertragswertverfahren oder Vergleichswertverfahren unter Berücksichtigung von aktuellen Marktbedingungen ermittelt und durch das Verhältnis zwischen Angebot und Nachfrage beeinflusst.</li>
            <li>Beim <a href="#">Kaufpreis</a> handelt es sich um einen frei verhandelbaren Wert, der sich am Verkehrswert orientiert.</li>
        </ul>
        <p class="paraDes">Der Unterschied zwischen dem Verkehrswert und Kaufpreis besteht also darin, dass der Kaufpreis ein konkreter Wert ist, der beim Kauf einer Immobilie tatsächlich gezahlt wird. Im Gegensatz dazu ist der Verkehrswert nur ein Schätzwert, der den voraussichtlichen Kaufpreis beschreibt.</p>

        <h1 class="headingDes">Welche Faktoren fließen in die Immobilienbewertung ein?</h1>
        <h2 class="headingDes">Die Lage Ihrer Immobilie</h2>
        <ul>
            <li>Preisentwicklung</li>
            <li>Distanz zu Schulen, Ärzten etc.</li>
            <li>Verkehrsanbindung</li>
            <li>Kulturangebote</li>
            <li>Lärmbelästigung</li>
        </ul>
        <h2 class="headingDes">Der Zustand Ihrer Immobilie</h2>
        <ul>
            <li>Baujahr</li>
            <li>Bausubstanz.</li>
            <li>Elektrische Leitungen</li>
            <li>Renovierungszustand</li>
            <li>Energieeffizienz</li>
        </ul>
        <h2 class="headingDes">Die Ausstattung Ihrer Immobilie</h2>
        <ul>
            <li>Größe</li>
            <li>Balkon, Terrasse, Garten</li>
            <li>Fußbodenbelag</li>
            <li>Heizung</li>
            <li>(Smart)Technik</li>
        </ul>

        <h1 class="headingDes">Wie bedeutend ist die Lage für die Bewertung?</h1>
        <p class="paraDes">Sehr wichtig. Nicht umsonst wird häufig darüber gewitzelt, dass die drei wichtigsten Faktoren bei der Bewertung „Lage, Lage, Lage“ sind. Man unterscheidet hierbei drei Kategorien: einfache, mittlere oder gute Lage. Für die Einschätzung der Lage wird die Mikro- und Makrolage betrachtet. Die Makrolage beschreibt dabei die Region oder Stadt, in der sich die Immobilie befindet. Mit der Mikrolage ist hingegen die direkte Umgebung, also beispielsweise die Nachbarschaft oder Angrenzung an Hauptverkehrsstraßen, gemeint.</p>
        <ul>
            <li>Infrastruktur</li>
            <li>Bevölkerungsstruktur</li>
            <li>Image des Bezirks</li>
            <li>Himmelsrichtung, z. B. wegen der Ausrichtung zur Sonne oder zum Wasser.</li>
        </ul>

        <h1 class="headingDes">Welche Rolle spielt der Zustand einer Immobilie bei der Bewertung?</h1>
        <p class="paraDes">Der bauliche Zustand hat einen großen Einfluss auf den Verkehrswert einer Immobilie. Neben der Lage und Ausstattung gehört er zu den wichtigsten Punkten, die in eine Immobilienbewertung einfließen. Sie sollten sich also fragen, ob werterhaltende oder wertsteigernde Maßnahmen notwendig sein könnten. In den meisten Fällen lohnt es sich in Modernisierungs- und Renovierungsmaßnahmen zu investieren, um so einen besseren Preis zu erzielen.</p>
        <p class="paraDes">In die Bewertung des Zustands einer Immobilie fließen beispielsweise diese Faktoren ein:</p>
        <ul>
            <li>Alter der Immobilie</li>
            <li>Allgemeine baulicher Zustand</li>
            <li>Energetischen Zustand (z. B. Dämmung, Zustand der Fenster und Türen, Heizungsanalage)</li>
            <li>Renovierungsmaßnahmen, Instandhaltungs- und Sanierungsarbeiten.</li>
        </ul>

        <h1 class="headingDes">Wie wirkt sich die Ausstattung einer Immobilie auf ihren Wert aus?</h1>
        <p class="paraDes">Die Ausstattung entscheidet darüber, ob sich interessierte Kaufende in einer Immobilie wohlfühlen und ein Kaufinteresse entwickeln. Je nachdem, in welchem Zustand sich die <a href="#">Ausstattung befindet</a> , kann man hierbei unterscheiden zwischen: einfacher Ausstattung, normaler Ausstattung und gehobener Ausstattung. Auch der Grundriss wirkt sich stark auf den Wert einer Immobilie aus. Im Gegensatz zu Anbauten und Inventar kann er jedoch nur mit großem Aufwand verändert werden.</p>
        <p class="paraDes">Zur Ausstattung einer Immobilie gehören:</p>
        <ul>
            <li>Einrichtungsgegenstände</li>
            <li>Verwendete Materialien</li>
            <li>Qualität der Bauweise</li>
            <li>Schnitt der Immobilie</li>
            <li>Terrassen und Balkone.</li>
        </ul>

        <h1 class="headingDes">Was unterscheidet die kostenlose Immobilienbewertung online von einem Wertgutachten?</h1>
        <p class="paraDes">Jede Immobilie ist individuell – und so auch ihr Wert. Bei einer Immobilienbewertung kommt es auf jedes Detail an. In unserem Online-Rechner fragen wir grobe Eckdaten zu Ihrem Objekt ab. So können wir auf Basis unserer Vergleichsdaten eine aktuelle Einschätzung des Marktwerts vornehmen. Wenn Sie jedoch ein Wertgutachten benötigen, das auch rechtlichen Zwecken Stand hält, empfehlen wir Ihnen zertifizierte Gutachter:innen. Häufig kann diese Aufgabe auch von <a href="#">Immobilienmakler:innen</a> übernommen werden.</p>
    </div>
</div>
<!-------------------------- End Description Page -------------------------->
</div>

<!-------------------------- Links Page -------------------------->
<h3 class="mainTextLP">Alle wichtigen Themen zur Immobilienbewertung</h3>

<div class="parent9">
    <div class="child9" >
        <h5 class="mainHeadLp">Bewertung & Gutachten</h5>
        <ul>
            <a href="#"><li> > <span>Immobilienbewertung</span></li></a>
            <a href="#"><li> > <span>Immobilienwert ermitteln</span></li></a>
            <a href="#"><li> > <span>Haus schätzen lassen</span></li></a>
            <a href="#"><li> > <span>Immobiliengutachter</span></li></a>
            <a href="#"><li> > <span>Immobiliengutachten</span></li></a>
            <a href="#"><li> > <span>Haus bewerten</span></li></a>
        </ul>
    </div>
    <div class="child9">
        <h5 class="mainHeadLp">Wertermittlung & Verkehrswert</h5>
        <ul>
            <a href="#"><li> > <span>Grundstückswert ermitteln</span></li></a>
            <a href="#"><li> > <span>Wertermittlungsverfahren</span></li></a>
            <a href="#"><li> > <span>Vergleichswertverfahren</span></li></a>
            <a href="#"><li> > <span>Ertragswertverfahren</span></li></a>
            <a href="#"><li> > <span>Sachwertverfahren</span></li></a>
            <a href="#"><li> > <span>Verkehrswertermittlung</span></li></a>
            <a href="#"><li> > <span>Verkehrswertgutachten</span></li></a>
            <a href="#"><li> > <span>Verkehrswert</span></li></a>
        </ul>
    </div>
    <div class="child9">
        <h5 class="mainHeadLp">Immobilienbewertung FAQ</h5>
        <ul>
            <a href="#"><li> > <span>Wie lange dauert die Bewertung einer Immobilie?</span></li></a>
            <a href="#"><li> > <span>Wie wird der Verkaufspreis einer Immobilie verhandelt?</span></li></a>
            <a href="#"><li> > <span>Wie lange ist eine Immobilienbewertung gültig?</span></li></a>
            <a href="#"><li> > <span>Wer erstellt Wertgutachten für Immobilien?</span></li></a>
            <a href="#"><li> > <span>Wie ermittelt sich der Verkaufspreis einer Immobilie?</span></li></a>
            <a href="#"><li> > <span>Wie viel kostet eine Immobilienbewertung?</span></li></a>
        </ul>
    </div>
</div>

<p class="linksDes"><sup>1</sup> Basierend auf einer von März 2017 bis März 2019 durchgeführten Analyse von auf ImmobilienScout24 inserierten Immobilien. Untersucht wurden die Vermarktungspreise von Immobilien mit dem Produkt Schaufenster, welches ausschließlich von Maklern gebucht werden kann, im Verhältnis zu vergleichbaren Standard-inserierten Objekten.</p>
<!-------------------------- Links Page -------------------------->


  

<!-------------------------- Contact Page -------------------------->
<div class="parent10">
    <div class="cild10">
        <li class="mainTextCP">ImmobilienScout24</li>
        <li><a href="#">Über uns</a></li>
        <li><a href="#">Kontakt & Hilfe</a></li>
        <li><a href="#">Karriere</a></li>
        <li><a href="#">Sitemap</a></li>
        <li><a href="#">Developer</a></li>
        <li><a href="#">Presseservice</a></li>
        <li><a href="#">Newsletter abonnieren</a></li>
    </div>
    <div class="cild10" style="margin-top: 2%;">
        <li class="mar"><a href="#">Impressum</a></li>
        <li><a href="#">AGB & Rechtliche Hinweise</a></li>
        <li><a href="#">Verbraucherinformationen</a></li>
        <li><a href="#">DatenschuDatenschutz-Kodex für GeodatendiensteDeveloper</a></li>
        <li><a href="#">Sicherheit</a></li>
        <li><a href="#">Kunde werden</a></li>
    </div>
    <div class="cild10">
        <li class="mainTextCP">International</li>
        <li><a href="#">immobilienscout24.at</a></li>
        <li class="mainTextCP mar" style="margin-top: 2%;">Service</li>
        <li><a href="#">Werbung</a></li>
        <li><a href="#">Magazin</a></li>
        <li><a href="#">Atlas</a></li>
    </div>
    <div class="cild10">
        <li class="mainTextCP">App herunterladen</li>
        <div class="parent11">
            <div class="child11">
                <img src="images/A.png" class="img-fluid"  width="94"alt="">
                <!-- <div class="d1">
                    <i  class="fab fa-apple app"></i>
                </div>
                <div class="d2">
                    <h6 class="app">Ladden in</h6>
                    <h5 class="app ex">App Store</h5>
                </div> -->
            </div>
            <div class="child11">
                <img src="images/G.png" class="img-fluid" width="94" alt="">
            </div>
        </div>
        <li class="mainTextCP">Folgen Sie uns</li>
        <!-- <i class="fab fa-facebook-square"></i><i class="fab fa-twitter-square"></i><i class="fab fa-youtube-square"></i> -->
    <img src="images/S.png" class="img-fluid" width="150" alt="">
    </div>

</div>
<h1 id="marker" class="text-center"><img src="images/logo_scout_transparent.png" class="img-fluid" width="83" style="margin-top: 1%;">    <span id="textSpan">Wir machen komplexe Entscheidungen einfach</span></h1>
<!-------------------------- End Contact Page -------------------------->


<p class="text-center end"><span id="cpywright">© Copyright 2021</span><span> Immobilien Scout GmbH</span></p>

<script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
        $("#navbar").css("display", "block");
      } else {
        navbar.classList.remove("sticky");
        $("#navbar").css("display", "none");
        
      }
    }
    </script>
<script>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;
console.log(steps);
setProgressBar(current);

$('.gif-btn').click(function (e) {


    var hidden = false;

setInterval(function(){
    document.getElementById("image").style.visibility="hidden";
   setInterval(function(){
    document.getElementById("text").innerHTML ="✔";
    setInterval(function () {
        document.getElementById("text2").innerHTML ="✔";
    },500)
    setInterval(function () {
        document.getElementById("text3").innerHTML ="✔";
        setInterval(function(){
            document.getElementById("image").style.display="none";
            document.getElementById("heading2").style.display ="none";
            document.getElementById("text-areas").style.display ="none";            
        document.getElementById("text").style.display ="none";
        document.getElementById("text2").style.display ="none";
        document.getElementById("text3").style.display ="none";
        document.getElementById("form").style.display="block";
        },500)
    },500)


   },1000)
},3000);

})

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);

});

function setProgressBar(curStep){
    console.log(curStep);
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})


}); 

</script>

<script>

// $('.gif-btn').click(function (e) {
//     var hidden = false;

// setInterval(function(){
//     document.getElementById("image").style.visibility="hidden";
//    setInterval(function(){
//     document.getElementById("text").innerHTML ="✔";
//     setInterval(function(){
//         document.location = "form.php";
//     },500)
//    },1000)
// },3000);

// })


    var slider1 = document.getElementById("myRange2");
var output1 = document.getElementById("demo2");
output1.innerHTML = slider1.value++;

slider1.oninput = function() {
  output1.setAttribute('value', this.value+'             m²') ;
}
</script>






<script>
    var slider = document.getElementById("myRange");
    
var output = document.getElementById("demo");
output.innerHTML = slider.value++;

slider.oninput = function() {
  output.setAttribute('value', this.value+'              m²')  ;
}
</script>
<script>
    $('.btn-number').click(function(e){
        e.preventDefault();
        
        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                
                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                } 
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }
    
            } else if(type == 'plus') {
    
                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }
    
            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {
        
        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
        
        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
    });
    
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
        
        
        </script><script>
            function toggleDiv(divid)
  {
 
    varon = divid + 'on';
    varoff = divid + 'off';
 
    if(document.getElementById(varon).style.display == 'block')
    {
    document.getElementById(varon).style.display = 'none';
    document.getElementById(varoff).style.display = 'block';
    }
   
    else
    {  
    document.getElementById(varoff).style.display = 'none';
    document.getElementById(varon).style.display = 'block'
    }
} 
$(window).scroll(function() {

$('#navbar').show();
number=0;
number=number+0.00001;
num=parseFloat(number)
console.log(num);
if($(window).scrollTop()<500) {
    $('#navbar').hide();
}else if($(window).scrollTop()>500) {
    $('#navbar').show();
}
});
//    -webkit-transition: opacity .25s ease-in;
// -moz-transition: opacity .25s ease-in;
//            -ms-transition: opacity .25s ease-in;
//            -o-transition: opacity .25s ease-in;
</script>
<!------------------------------------------- Script File ------------------------------------------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!------------------------------------------- User Script File ------------------------------------------->
<script src="js/index.js" type="text/javascript" rel="script"></script>
<!--------------------------------------------------------------------------------------------------->
</body>
</html>



<!-------------------------- Navbar -------------------------->
<!-------------------------- End Navbar -------------------------->


