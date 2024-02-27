<!DOCTYPE html>
<html lang="en">
<head>
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

        .slider_image {
    display: none; /* Oculta todas las imágenes por defecto */
}

.slider_image.active {
    display: block; /* Muestra la imagen activa */
}

.slider_image img {
    width: 100%;
    height: auto;
    object-fit: cover;
    opacity: 0; /* Inicialmente la opacidad está en 0 */
    transition: opacity 0.5s ease-in-out; /* Efecto de transición suave para la opacidad */
}

.slider_image.active img {
    opacity: 1; /* Muestra la imagen activa con opacidad completa */
}


/* Estilo para el contenedor del slider */
.contenedor_slider {
    position: relative;
    overflow: hidden; /* Evita que las imágenes grandes desborden el contenedor */
    width: 100%; /* Ajusta el ancho al 100% */
}

/* Estilo para los puntos (dots) */
.slider_nave {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
}

.dot {
    width: 15px;
    height: 15px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    margin: 0 5px;
    cursor: pointer;
}

/* Estilo para el punto activo */
.active {
    background-color: #333;
}
.carousel-inner img {
            width: 100%;
            height: 100%;
}
/* Estilo para el div de aula */
.aula {
    clear: both; /* Asegura que este div aparezca debajo del slider */
    margin-top: 20px; /* Espaciado superior */
}
    </style>
</head>
<body>

<!--
<div class="contenedor_slider carousel-fade">
        <div class="panel">
            <div class="slider_image"><img src="Assets/Images/Banner_prue.png" alt="Image 1"></div>
            <div class="slider_image"><img src="Assets/Images/Banner_prue02.png" alt="Image 2"></div>
            <div class="slider_image"><img src="Assets/Images/Banner_prue03.png" alt="Image 3"></div>
        </div>
        <div class="slider_nave">
            <div class="dot" data-slide="0"></div>
            <div class="dot" data-slide="1"></div>
            <div class="dot" data-slide="2"></div>
        </div>
</div>-->
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
<script>
document.addEventListener("DOMContentLoaded", function() {
        const slides = document.querySelectorAll(".slider_image");
        const dots = document.querySelectorAll(".dot");
        let currentSlide = 0;

        function showSlide(index) {
            // Ocultar todos los slides
            slides.forEach(slide => {
                slide.classList.remove("active");
            });
            // Desactivar todos los dots
            dots.forEach(dot => {
                dot.classList.remove("active");
            });
            // Mostrar el slide seleccionado
            slides[index].classList.add("active");
            // Activar el dot correspondiente al slide actual
            dots[index].classList.add("active");
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        function goToSlide(index) {
            currentSlide = index;
            showSlide(currentSlide);
        }

        // Manejadores de eventos para los dots
        dots.forEach((dot, index) => {
            dot.addEventListener("click", () => {
                goToSlide(index);
            });
        });

        // Autoplay
        setInterval(nextSlide, 3000); // Cambiar de slide cada 3 segundos

        // Mostrar el primer slide al cargar la página
        showSlide(currentSlide);
    });
</script>
</html>
