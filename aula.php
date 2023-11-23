<head>
    <style>
        .bcontent {
            margin-top: 10px;
        }
        .cajas {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .cajas .items {
            margin: 15px;
            display: flex;
            align-items: center; /* Centra verticalmente los elementos dentro del contenedor */
        }
        .cajas .items img {
            width: 70%;
            margin: auto; /* Centra la imagen horizontalmente */
            display: block; /* Asegura que el margin: auto; funcione correctamente */
        }
        .icono{
            margin: auto;
        }
        .cajas h5{
            text-align: center;
        } 
        .aula{
            /*background-color: #3B69AE;
            /*border-radius: 10px;
            padding: 20px; /* Ajustar según sea necesario */
            /*color: #ffffff; /* Color del texto blanco */
            width: 100%;
        }
        .aula h2, .aula p{
            text-align: center;
        }
        .aula_total{
            width: 100%;
        }
        .items p{
            text-align: justify;
        }
        .items {
                width: 45%;
            }
        @media (max-width: 988px) {
            .items {
                width: 100%;
            }
            .cajas .items img {
                width: 80%;
                padding: 15px;
            
            }
        }
        @media (max-width: 510px) {
            .cajas .items img {
                width: 60%;
            
            }
        }
    </style>
</head>
<body>
        <div class="aula">
            <h2>Aula Virtual del Ceplan</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatem porro at nulla? Cumque minus qui animi quis non quasi autem aspernatur! Pariatur beatae, dolores officia eius distinctio quas voluptate repellendus blanditiis, natus nostrum nemo, doloribus vel autem dignissimos porro animi tenetur facilis. Nostrum dolorum aliquam neque vero placeat quaerat rerum culpa ducimus. Non quam eos id, consectetur aut aliquid hic unde nulla maxime aliquam, cumque aspernatur nemo qui officia. Vitae saepe ducimus magnam voluptas quisquam qui fugiat, enim id?
            </p>
            
        </div>
    <div class="container bcontent">
        <hr />
        <div class="cajas">
            <div class="card items">
                <div class="row no-gutters">
                    <div class="col-sm-5 icono">
                        <img class="card-img" src="Assets/Images/publico-objetivo.png">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">Dirigido a: </h5>
                            <p class="card-text">Funcionarios públicos y operadores del Sinaplan que coordinan u orientan la elaboración o actualización del conocimiento integral de la realidad y futuro deseado a nivel nacional, territorial y local.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card items">
                <div class="row no-gutters">
                    <div class="col-sm-5 icono">
                        <img class="card-img" src="Assets/Images/exito.png">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">Objetivo: </h5>
                            <p class="card-text">Difundir procesos e información actualizada y especializada sobre la formulación de la fase de conocimiento integral de la realidad y futuro deseado para los diferentes instrumentos del Sinaplan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
