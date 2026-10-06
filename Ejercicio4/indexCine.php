<?php


if (isset($_POST["crear"])) {
    require_once __DIR__ . '/view/formPeliculas.php';

} elseif (isset($_POST["registrar"])) {

    require_once __DIR__ . '/controller/ControladorEjercicio4.php';

    $controlador = new ControladorPelicula();

    $peliculas = $controlador->registrarPeliculas($_POST["peliculas"]);

    $promedio = $controlador->calcularPromedio($peliculas);

    $datos = ["peliculas" => $peliculas, "promedio" => $promedio];

    require_once  __DIR__ . '/view/resultadoPeli.php';
} else {
    require_once __DIR__ . '/view/formulario.php';
}


