<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="content/css/styl.css" rel="stylesheet" type="text/css"/>
        <link href="content/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="content/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="content/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="content/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="content/js/bootstrap.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title></title>
    </head>
    <body>
        <div class="container-fluid col-lg-12">
            <div class="panel-default panel-body">    
                <div class="dom" id="dom">
                    <img src="content/img/domek projekt.png"  >
                </div>



                <div class="grzejnikWl1" id="KaloryferWlaczony_1">
                    <img src="content/img/kaloryfer_wl.png" >
                </div> 
                <div  class="grzejnikWl2" id="KaloryferWlaczony_2">
                    <img src="content/img/kaloryfer_wl.png" >
                </div>

                <div  class="grzejnikWl3" id="KaloryferWlaczony_3">
                    <img src="content/img/kaloryfer_wl.png" >

                </div>

                <div  class="grzejnikWl4" id="KaloryferWlaczony_4">
                    <img src="content/img/kaloryfer_wl.png" >

                </div>

                <div  class="oknoOtw1" id="OknoPraweOtwarte">

                    <img src="content/img/okno otworzne prawe konserwatywne.png" alt=""/>
                </div>

                <div  class="oknoOtw2" id="OknoLeweOtwarte">
                    <img src="content/img/lewackie okno otwarte na lewą stronę.png" alt=""/>

                </div>





                <div  class="OknoPodOtw" id="OknoDachoweOtwarte">
                    <img src="content/img/dachowe okienko na świat otworzone.png" alt=""/>

                </div>

                <div id="SwiatloWlaczone_1">
                    <img src="content/img/lampeczka świeci.png" alt=""/>

                </div>

                <div id="SwiatloWlaczone_2">
                    <img src="content/img/lampeczka świeci.png" alt=""/>

                </div>
                <div id="SwiatloWlaczone_3">
                    <img src="content/img/lampeczka świeci.png" alt=""/>

                </div>
                <div id="SwiatloWlaczone_4">
                    <img src="content/img/lampeczka świeci.png" alt=""/>

                </div>

                <div id="KlimatyzacjaWlaczona_1">
                    <img src="content/img/nibyklima dziala.png" alt=""/>
                </div>


                <div id="KlimatyzacjaWlaczona_2">
                    <img src="content/img/nibyklima dziala.png" alt=""/>
                </div>
            </div>
            <div class="panel-default">

            </div>
        </div>
        <div class="panel-default" id="Ustawienia">
            <table>
                <tr>          <td>   temperatura oczekiwana<br></td>

                    <td>  <input id="temperatura" type="number" value="20"><br></td>
                </tr>
                <tr> 
                    <td>temperatura na zewnatrz <br></td>
                    <td>    <input id="temperatura" type="number" value="20"><br><td>
                </tr>
                <tr>
                    <td>dzeszcz</td>
                    <td>
                        <div class="onoffswitchDeszcz">
                            <input type="checkbox" name="onoffswitchDeszcz" class="onoffswitchDeszcz-checkbox" id="myonoffswitchDeszcz" checked>
                            <label class="onoffswitchDeszcz-label" for="myonoffswitchDeszcz">
                                <span class="onoffswitchDeszcz-inner"></span>
                                <span class="onoffswitchDeszcz-switch"></span>
                            </label>
                        </div>

                    </td>

                </tr>
                <br>
                <tr> <td> wiatr</td>
                    <td>       
                        <div class="onoffswitchWiatr">
                            <input type="checkbox" name="onoffswitchWiatr" class="onoffswitchWiatr-checkbox" id="myonoffswitchWiatr" checked>
                            <label class="onoffswitchWiatr-label" for="myonoffswitchWiatr">
                                <span class="onoffswitchWiatr-inner"></span>
                                <span class="onoffswitchWiatr-switch"></span>
                            </label>
                        </div>

                    </td>



                </tr>


                <tr>       
                    <td>
                        <br>
                        <br>
                        <br>

                        Wnętrze
                        <br>
                        
                        <br>
                    </td>
                <tr>
                <br>
                <tr>
                    <td>   Temperatura<br> </td>
                    <td> <input id="temperaturaWnetrze" type="number" value="20"></td>

                </tr>
                <tr>
                    <td> Okna elewacyjne</td>
                    <td>
                        <div class="onoffswitchOknoEwelacyjne">
                            <input type="checkbox" name="onoffswitchOknoEwelacyjne" class="onoffswitchOknoEwelacyjne-checkbox" id="myonoffswitchOknoEwelacyjne" checked>
                            <label class="onoffswitchOknoEwelacyjne-label" for="myonoffswitchOknoEwelacyjne">
                                <span class="onoffswitchOknoEwelacyjne-inner"></span>
                                <span class="onoffswitchOknoEwelacyjne-switch"></span>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> Okna dachowe<br></td>
                    <td>
                        <div class="onoffswitchOknoDachowe">
                            <input type="checkbox" name="onoffswitchOknoDachowe" class="onoffswitchOknoDachowe-checkbox" id="myonoffswitchOknoDachowe" checked>
                            <label class="onoffswitchOknoDachowe-label" for="myonoffswitchOknoDachowe">
                                <span class="onoffswitchOknoDachowe-inner"></span>
                                <span class="onoffswitchOknoDachowe-switch"></span>
                            </label>
                        </div>
                    </td>
                </tr> 

                <tr>
                    <td> 
                        Ogrzewanie<br>
                    </td>
                    <td>
                         <div class="onoffswitchOgrzewanie">
                            <input type="checkbox" name="onoffswitchOgrzewanie" class="onoffswitchOgrzewanie-checkbox" id="myonoffswitchOgrzewanie" checked>
                            <label class="onoffswitchOgrzewanie-label" for="myonoffswitchOgrzewanie">
                                <span class="onoffswitchOgrzewanie-inner"></span>
                                <span class="onoffswitchOgrzewanie-switch"></span>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> 
                        Klimatyzacja<br>
                    </td>
                    <td>
                        <div class="onoffswitchKlimatyzacja">
                            <input type="checkbox" name="onoffswitchKlimatyzacja" class="onoffswitchKlimatyzacja-checkbox" id="myonoffswitchKlimatyzacja" checked>
                            <label class="onoffswitchKlimatyzacja-label" for="myonoffswitchKlimatyzacja">
                                <span class="onoffswitchKlimatyzacja-inner"></span>
                                <span class="onoffswitchKlimatyzacja-switch"></span>
                            </label>
                        </div>
                    </td>
                </tr>  
                <tr>

            </table>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
