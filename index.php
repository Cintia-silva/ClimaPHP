<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>   
    <head>

        <title>Clima e Tempo Brusque</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymou"></script>

        <script src="js/clima.js"></script>

        <style>
            .row{
                background-color: rgb(168, 64, 50);
            }
            #jumbotronn{

                background-color: rgb(100, 145, 178);

            }
            h4{
                color: rgb(38, 99, 251);
            }
            h5{
                color: orange;
            }

            h6{
                color:rgb(127, 77, 221);
            }

        </style>

        <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de informações climáticas de Brusque e região. Desenvolvida por Cintia suelem da Silva"/>
        <meta NAME="ABSTRACT" CONTENT="Informações climáticas"/>
        <meta name="keywords" content="Clima, Tempo, Temperatura, Umidade, Temperatura em Brusque, velocidade do ar, vento, sol nascendo, sol se pondo, chuva, sol
              Frio, calor, Brusque, Municipio de Brusque, pressão do ar, vale do Itajaí, dia de sol, dia de chuva, praia, vai chover hoje"/>
        <meta NAME="title" CONTENT="Clima e Tempo Brusque" />
        <meta NAME="identifier-url" content="https://cintia-clima-senai.herokuapp.com/" />
        <meta NAME="author" content="Cintia Suelem" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="Cintia_suelem-silva@estudante.sc.senia.br"/>

        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://cintia-clima-senai.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Clima e Tempo Brusque" />
        <meta property="og:title" content="Clima e Tempo Brusque" />
        <meta property="og:description" content="Site de informações climáticas de Brusque e região. Desenvolvida por Cintia suelem da Silva" />
        <meta property="og:image" content="https://cintia-clima-senai.herokuapp.com/img/%C3%ADcones/porDoSol.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />

        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de informações climáticas de Brusque e região. Desenvolvida por Cintia suelem da Silva" />
        <meta name="twitter:title" content="Clima e Tempo Brusque" />

    </head>
    <body>
        <div class="row">
            <div class="col-md-12">

                <div id="jumbotronn" class="jumbotron"> 
                    <h1>Tempo para Brusque-SC | <span id="temperatura"></span></h1>
                    <p>
                        <span id="situacao"></span>
                        <img id="icone" src="img/ícones/02d.png"/>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">

                <div class="jumbotron"> 
                    <h4>Umidade atual Brusque: <span id="tempo"></span>
                        <img width="80px" src="img/ícones/chuva1.jpg"/></h4>
                    <p >Umidade do ar: <span id="umidade"></span></p>

                </div>

            </div>



            <div class="col-md-4">

                <div class="jumbotron"> 
                    <h4>Pressão do ar atual Brusque:<span id="pressao"></span>
                        <img width="70px" src="img/ícones/pressao.png"/></h4>

                    <p >Pressão do ar: <span id="pressão"></span></p>


                </div>

            </div>


            <div class="col-md-4">

                <div class="jumbotron"> 
                    <h4>Temperatura Máxima atual Brusque:<span id="temperaturaMaxima"></span>
                        <img width="60px" src="img/ícones/temperaturamaxima.jpg"/></h4>

                    <p >Temperatura Máxima: <span id="temperaturaMax"></span></p>



                </div>

            </div>

            <div class="col-md-4">

                <div class="jumbotron"> 
                    <h4>Temperatura Mínima atual Brusque:   <span id="temperaturaMinima"></span>
                        <img width="50px" src="img/ícones/temperaturaminima.png"/></h4>

                    <p >Temperatura Mínima: <span id="temperaturaMin"></span></p>

                </div>
            </div>


            <div class="col-md-4">

                <div class="jumbotron"> 
                    <h4>Velocidade do vento atual Brusque: <span id="velocidadedovento"></span>
                        <img width="50px" src="img/ícones/vento.png"/></h4>

                    <p >Velocidade do ar: <span id="velocidade"></span></p>




                </div>

            </div>
            <div class="col-md-2">

                <div class="jumbotron"> 
                    <h5>Nascer do Sol: <span id="amanhecer"></span>
                        <img width="90px" src="img/ícones/amanhecer.png"/></h5>
                </div>
            </div>
            <div class="col-md-2">

                <div class="jumbotron"> 

                    <h6>Por do Sol: <span id="anoitecer"></span>
                        <img width="90px" src="img/ícones/porDoSol.png"/></h6>
                </div>

            </div>

        </div>

    </body>
</html>
