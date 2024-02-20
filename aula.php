<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap; /* Añadido para permitir que los servicios se envuelvan en dispositivos pequeños */
        }

        .service {
            text-align: center;
            max-width: 300px;
            margin-bottom: 30px; /* Añadido margen inferior para separar los servicios */
        }

        .icon-circle {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #3B69AE;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px; /* Margen inferior para separar los servicios */
        }

        .icon-circle img {
            max-width: 60px;
            max-height: 60px;
        }

        .service h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #3B69AE;
            font-weight: bold;
        }

        .service p {
            font-size: 16px;
            color: #666;
        }

        .aula {
            text-align: center;
        }

        /* Media query para dispositivos móviles */
        @media screen and (max-width: 767px) {
            .container {
                flex-direction: column; /* Cambia la dirección del contenedor a columna */
                align-items: center; /* Centra los servicios */
            }
        }

        /* Media query para dispositivos con un ancho mayor */
        @media screen and (min-width: 768px) {
            .container {
                max-width: 1200px; /* Ancho máximo para que quepan cuatro servicios en una fila */
                margin: 0 auto; /* Centra el contenedor */
            }
        }
    </style>
</head>
<body>
<div class="aula">
    <h2>Aula Virtual del Ceplan</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatem porro at nulla? Cumque minus qui animi
        quis non quasi autem aspernatur! Pariatur beatae, dolores officia eius distinctio quas voluptate repellendus
        blanditiis, natus nostrum nemo, doloribus vel autem dignissimos porro animi tenetur facilis. Nostrum dolorum
        aliquam neque vero placeat quaerat rerum culpa ducimus. Non quam eos id, consectetur aut aliquid hic unde nulla
        maxime aliquam, cumque aspernatur nemo qui officia. Vitae saepe ducimus magnam voluptas quisquam qui fugiat,
        enim id?
    </p>
</div>
<div class="container">
    <div class="service">
        <div class="icon-circle">
            <img class="card-img" src="Assets/Images/publico.png">
        </div>
        <h2>Público Objetivo</h2>
        <p>Funcionarios públicos y operadores del Sinaplan que coordinan u orientan la elaboración o actualización del
            conocimiento integral de la realidad y futuro deseado a nivel nacional, territorial y local.</p>
    </div>
    <div class="service">
        <div class="icon-circle">
            <img class="card-img" src="Assets/Images/objetivos.png">
        </div>
        <h2>Objetivo</h2>
        <p>Difundir procesos e información actualizada y especializada sobre la formulación de la fase de conocimiento
            integral de la realidad y futuro deseado para los diferentes instrumentos del Sinaplan.</p>
    </div>
    <div class="service">
        <div class="icon-circle">
            <img class="card-img" src="Assets/Images/dispositivos.png">
        </div>
        <h2>Multiplataforma</h2>
        <p>Conéctate desde tu ordenador, celular, tablet u otros dispositivos móviles.</p>
    </div>
    <!-- Cuarto servicio -->
    <!--<div class="service">
        <div class="icon-circle">
            <img class="card-img" src="Assets/Images/cuarto.png">
        </div>
        <h2>Cuarto Servicio</h2>
        <p>Descripción del cuarto servicio.</p>
    </div>-->
</div>
</body>
</html>
