<?php
// var_dump($datos);
// exit;

$peliculas = $datos["peliculas"];
$promedio = $datos["promedio"];



echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Resultado CinePlus</title>";
echo "</head>";
echo "<body>";
echo "<h1>Películas registradas en CinePlus</h1>";

    foreach ($peliculas as $pelicula) {
        echo "<h2>" . $pelicula->getTitulo() . "</h2>";
        echo "Género: " . $pelicula->getGenero() . "<br>";
        echo "Duración: " . $pelicula->getDuracionMinutos() . " minutos <br>";
        echo "Clasificación: " . $pelicula->getClasificacion() . "<br>";
        echo "Calificación: " . $pelicula->getCalificacion() . "<br>";

        if ($pelicula->esRecomendada()) {
            echo "Película recomendada";
        } else {
            echo "Película no recomendada";
        }
    }

    echo "<h2>Promedio de calificaciones: " . round ($promedio, 2) . "</h2>";
    echo "<h2>Total de películas: " . count($peliculas) . "</h2>";

    echo  '<a href="indexCine.php">Volver</a>';
echo "</body>";
echo "</html>";