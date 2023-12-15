<?php
// Tu c¨®digo PHP aqu¨ª
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estamos en Mantenimiento</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .maintenance-title {
            font-size: 36px;
            margin-top: 50px;
        }

        .maintenance-message {
            font-size: 18px;
            margin-top: 20px;
        }

        .maintenance-image {
            margin-top: 50px;
            max-width: 40%;
        }

        @media (max-width: 768px) {
            .maintenance-image {
                margin-top: 50px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1 class="maintenance-title">Estamos en Mantenimiento</h1>
    <img class="maintenance-image" src="Assets/Images/mantenimiento.png" alt="Mantenimiento">
    <p class="maintenance-message">Estamos trabajando en nuestra plataforma, en breve volvemos.</p>
</body>
