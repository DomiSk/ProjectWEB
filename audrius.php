<?php include "header.php" ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<h2 class=" center-align">Keliauk ir pažink Lietuvą</h2>


<div>
    <div class="container fonas ">




        <div class="row myflex">
            <div class="center-align col s12 m4 ">

                <a href="https://www.citybee.lt/lt/transportas"><i class="spalva large material-icons text">directions_car</i></a>
                <h4>
                    Keliauk automobiliu.

                </h4>

                <p>

                    <!-- <form target="_blank" action="https://www.google.com/maps/dir///@54.6818571,25.2358156,12z/data=!4m2!4m1!3e0"> -->
                    <!-- <input type class="text-colour spalva"  name="search"> -->
                    <button onclick="myFunction()">Ieskoti</button>
                    <input id="googlemap" type="text" class="buttonstyle ">


                    <script>
                        function myFunction() {

                            var inputValue = document.querySelector("#googlemap").value;


                            var pavadinimas = inputValue;
                            window.location.href = "https://www.google.com/maps/place/" + pavadinimas;
                        }
                    </script>




                </p>
            </div>


            <div class="center-align col s12 m4">

                <a href="https://www.autobusubilietai.lt/"><i class="spalva large material-icons text"> directions_bus</i></a>


                <h4>

                    Keliauk autobusu. </h4>

               


            </div>


            <div class="center-align col s12 m4 ">

                <a href="https://www.velonova.lt/nuoma"><i class="spalva large material-icons text">directions_bike</i></a>

                <h4>

                    Keliauk dviračiu.


                </h4>

                <p> <button>Ieškoti kelionės</button> </p>
            </div>



            <div class=" center-align col s12 m4">

                <a href="https://traukiniobilietas.lt/portal/"><i class="large material-icons text">directions_railway</i></a>
                <h4>

                    Keliauk traukiniu.

                </h4>
                <p> <button>Ieškoti kelionės</button></p>

            </div>


            <div class="center-align col s12 m4">

                <a href="https://www.kelioneslaivu.lt/"><i class="large material-icons text">directions_boat</i></a>
                <h4>

                    Keliauk laivu.

                </h4>

                <p> <button>Ieškoti kelionės</button></p>

            </div>


            <div class="center-align col s12 m4">

                <a href="http://www.turistopasaulis.lt/turistiniai-marsrutai/pesciomis/"><i class="large material-icons text">directions_walk</i></a>
                <h4>

                    Keliauk pesčiomis.


                </h4>

                <p> <button>Ieškoti kelionės</button>

                    <input type="text">
                </p>

            </div>

        </div>
    </div>

    <div>

        <div class="container  ">
            <div class="row">
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