<?php

$cantidad = $_POST["cantidad"];

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Registrar películas</title>";
echo "</head>";
echo "<body>";

echo "<h1>Registro de películas CinePlus</h1>";

echo "<form action='indexCine.php' method='POST'>";

for ($i = 0; $i < $cantidad; $i++) {
    $numero = $i + 1;

    echo "<h2>Película $numero</h2>";

    echo "<label>Título: </label>";
    echo "<input type='text' name= 'peliculas[$i][titulo]' required>";

    echo "<br><br>";

    echo "<label>Género: </label>";
    echo "<input type='text' name='peliculas[$i][genero]' required>";

    echo "<br><br>";

    echo "<label>Duración en horas: </label>";
    echo "<input type='number' name='peliculas[$i][duracion]' required>";

    echo "<br><br>";

    echo "<label>Clasificación:</label>";
    echo "<input type='text' name='peliculas[$i][clasificacion]' required>";

    echo "<br><br>";

    echo "<label>Calificación:</label>";
    echo "<input type='number' name='peliculas[$i][calificacion]' min='1' max='5' required>";

    echo "<br><br>";
}

echo "<button type='submit' name='registrar'>Registrar películas</button>";

echo "</form>";
echo "</body>";
echo "</html>";

    // if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cantidad"])) {
    // $cantidad = (int) $_POST["cantidad"];

    // echo "<h1>Registro de películas</h1>";

    // echo "<form action='indexCine.php' method='POST'>";

    // for ($i = 1; $i <= $cantidad; $i++) {
    //     echo "<h2>Película $i</h2>";

    //     echo "
    //         <label>Título: </label>
    //         <input type='text' name='titulo[]' required>
    //         <br><br>
            
    //         <label>Género: </label>
    //         <input type='text' name='genero[]' required>
    //         <br><br>
            
    //         <label>Duración en horas: </label>
    //         <input type='number' name='duracion[]' min='1' required>
    //         <br><br>

    //         <label>Clasificación: </label>
    //         <input type='text' name='clasificacion[]' required>
    //         <br><br>
            
    //         <label>Calificación (1 a 5): </label>
    //         <input type='number' name='calificacion[]' min='1' required>";
    // }

    // echo "<button type='submit' name='registrar'>Crear películas</button>";
    // echo "</form>";

    // }
    ?>
