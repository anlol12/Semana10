<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Residuos Solidos</title>
    <style>
        body {
            background-color: #c6e2ff; 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: red; 
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .investigation-space, .introduction-space {
            background-color: #c6e2ff; 
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

      
    </style>
</head>
<body>

<?php
$logoUniversidad = "https://instructure-uploads.s3.amazonaws.com/account_109250000000000001/attachments/4454475/Logotipo-vertical-azul.png";
$nombreUniversidad = "Universidad Gerardo Barrios";
$nombreFacultad = "Facultad de Ciencia y Tecnologia";
$nombreMateria = "Programación en PHP";
$nombreDocente = "Licenciado Willian Alexis Montes Girón";
$nombreCarrera = "Ingeniería en Sistemas y Redes Informáticas";
$nombreEstudiante = "Anderson José Berrios Diaz, Darlin Mariela Ramos Gutierrez, Marcos Isai Brioso Benavidez, Katherine Verenice Fuentes Rivera, Marcela Nohemy Hernandez Villatoro ";
$codigoEstudiante = "SMSS - SMSS172422 - SMSS- SMSS077422";

echo "
    <div style='text-align: center;'>
        <img src='$logoUniversidad' alt='Logo de la Universidad' width='100'>
        <h1>$nombreUniversidad</h1>
        <p>Facultad: $nombreFacultad</p>
        <p>Materia: $nombreMateria</p>
        <p>Docente: $nombreDocente</p>
        <p>Carrera: $nombreCarrera</p>
        <p>Estudiante: $nombreEstudiante</p>
        <p>Código de Estudiante: $codigoEstudiante</p>
    </div>
    ";
?>

<div style='text-align: center;'>
    <div class="introduction-space">
        <h2>Introducción</h2>
        <p>La gestión de residuos sólidos representa uno de los desafíos más apremiantes en el panorama ambiental contemporáneo. En un mundo caracterizado por el crecimiento poblacional y el desarrollo industrial, la generación y disposición de residuos sólidos se ha convertido en un tema de preocupación global.
        exploraremos la complejidad de la gestión de residuos sólidos, analizando sus implicaciones ambientales, sociales y económicas.</p>
        <h2>Situacion Problematica</h2>
        <p>En muchas partes del mundo, la gestión de residuos sólidos enfrenta una serie de desafíos significativos que amenazan la salud ambiental y la calidad de vida de las comunidades. Uno de los problemas más acuciantes es la falta de infraestructura adecuada para la recolección, 
            transporte y tratamiento de los residuos sólidos. En algunas áreas, especialmente en regiones en desarrollo, los sistemas de gestión de residuos son insuficientes o inexistentes, lo que lleva a la acumulación de basura en calles, ríos y espacios naturales, con consecuencias desastrosas
             para el medio ambiente y la salud pública.</p>
    </div>
    </ul>
    
    <center>
        <a href="bd.html"> <button>
            Diagrama BD
        </button></a>
    </center>

    <center>
        <a href="DIC.html"> <button>
            Desarrollar un diccionario
        </button></a>
    </center>
        
    
    
    </body>
    </html>