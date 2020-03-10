<?php include "header.php" ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<h2 class=" center-align">Keliauk ir pažink Lietuvą</h2>




<div>
    <div class="container fonas ">



        <div class="row myflex">
            <div class="center-align col s12 m4 ">

                <a href="https://www.citybee.lt/lt/transportas"><i class="spalva large material-icons text">directions_car</i>
                    <h4 class="spalva">
                        Keliauk automobiliu.

                    </h4>
                </a>

            </div>


            <div class="center-align col s12 m4">
                <a href="https://www.autobusubilietai.lt/"><i class="spalva large material-icons text"> directions_bus</i>

                    <h4 class="spalva">
                        Keliauk autobusu. </h4>
                </a>
            </div>


            <div class="center-align col s12 m4 ">
                <a href="https://www.velonova.lt/nuoma"><i class="spalva large material-icons text">directions_bike</i>

                    <h4 class="spalva">

                        Keliauk dviračiu.

                    </h4>
                </a>
            </div>



            <div class=" center-align col s12 m4">

                <a href="https://traukiniobilietas.lt/portal/"><i class="spalva large material-icons text">directions_railway</i>
                    <h4 class="spalva">

                        Keliauk traukiniu.

                    </h4>
                </a>
            </div>


            <div class="center-align col s12 m4">

                <a href="https://www.kelioneslaivu.lt/"><i class="spalva large material-icons text">directions_boat</i>
                    <h4 class="spalva">

                        Keliauk laivu.

                        </h4>

                </a>

            </div>


            <div class="center-align col s12 m4">

                <a href="http://www.turistopasaulis.lt/turistiniai-marsrutai/pesciomis/"><i class="spalva large material-icons text">directions_walk</i>
                    <h4 class="spalva">

                        Keliauk pesčiomis.
                    </h4>

                </a>

            </div>

        </div>
        <div class="button ">

            <button onclick class="mygtukas myFunction()">Kur keliausite?</button>
            <input id="googlemap" type="text" class="button-style">


            <script>
                function myFunction() {

                    var inputValue = document.querySelector("#googlemap").value;


                    var pavadinimas = inputValue;
                    window.location.href = "https://www.google.com/maps/place/" + pavadinimas;
                }
            </script>


        </div>

    </div>




    <div>

        <div class="container">

            <div class="row myflex">

                <div class="center-align col s2">
                    <a href="https://www.piliakalniai.lt/">
                        <h6> Piliakalniai
                            <img src="https://picsum.photos/150/100" alt="">
                        </h6>
                    </a>
                </div>
                <div class="center-align col s2 ">
                    <a href="https://www.15min.lt/pasaulis-kiseneje/naujiena/per-lietuva/10-dvaru-lietuvoje-kurie-praejusiais-metais-keliautojus-domino-labiausiai-642-1090768">
                        <h6> Pilys ir dvarai.
                            <img src="https://picsum.photos/150/102" alt="">
                        </h6>
                    </a>
                </div>
                <div class="center-align col s2 ">
                    <a href="https://www.15min.lt/pasaulis-kiseneje/naujiena/per-lietuva/10-dvaru-lietuvoje-kurie-praejusiais-metais-keliautojus-domino-labiausiai-642-1090768">
                        <h6> Apžvalgos bokštai.
                            <img src="https://picsum.photos/150/101" alt="">
                        </h6>
                    </a>
                </div>
                <div class="center-align col s2 ">
                    <a href="https://www.15min.lt/pasaulis-kiseneje/naujiena/per-lietuva/10-dvaru-lietuvoje-kurie-praejusiais-metais-keliautojus-domino-labiausiai-642-1090768">
                        <h6> Muziejai.
                            <img src="https://picsum.photos/150/103" alt="">
                        </h6>
                    </a>
                </div>
                <div class="center-align col s2 ">
                    <a href="https://www.15min.lt/pasaulis-kiseneje/naujiena/per-lietuva/10-dvaru-lietuvoje-kurie-praejusiais-metais-keliautojus-domino-labiausiai-642-1090768">
                        <h6> Pažintiniai takai.
                            <img src="https://picsum.photos/150/99" alt="">
                        </h6>
                    </a>
                </div>
                <div class="center-align col s2 ">
                    <a href="https://www.15min.lt/pasaulis-kiseneje/naujiena/per-lietuva/10-dvaru-lietuvoje-kurie-praejusiais-metais-keliautojus-domino-labiausiai-642-1090768">
                        <h6> Kitos vietos.
                            <img src="https://picsum.photos/149/100" alt="">
                        </h6>
                    </a>
                </div>




            </div>
        </div>
    </div>
    <?php include "footer.php" ?>